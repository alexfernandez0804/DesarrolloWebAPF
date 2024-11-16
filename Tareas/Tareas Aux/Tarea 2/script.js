function searchBooks() {
    const prompt = document.getElementById('searchbar').value;
    const resultsDiv = document.querySelector('.results');
    const detailsDiv = document.getElementById('detalles');
    
    resultsDiv.innerHTML = ''; // Limpiar resultados previos
    detailsDiv.innerHTML = ''; // Limpiar detalles previos

    if (prompt.trim() !== '') {
        fetch(`search.php?prompt=${encodeURIComponent(prompt)}`)
            .then(response => response.json())
            .then(data => {
                if (data.length > 0) {
                    data.forEach(book => {
                        const resultItem = document.createElement('div');
                        resultItem.textContent = book.titulo;
                        resultItem.style.cursor = 'pointer';
                        resultItem.onclick = () => verdetalles(book);
                        resultsDiv.appendChild(resultItem);
                    });
                } else {
                    resultsDiv.textContent = 'No se encontraron resultados';
                }
            })
            .catch(error => console.error('Error:', error));
    }
}


function verdetalles(book) {
    const detailsDiv = document.getElementById('detalles');
    const resultsDiv = document.querySelector('.results');

    detailsDiv.innerHTML = `
        <h3>Detalles del libro</h3>
        <p><strong>Título:</strong> ${book.titulo}</p>
        <p><strong>Autor:</strong> ${book.autor}</p>
        <p><strong>Año:</strong> ${book.anio}</p>
    `;

    resultsDiv.innerHTML = '';
}
