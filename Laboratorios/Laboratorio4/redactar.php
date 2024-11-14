<?php
    echo "<form id='formulario'>
    <label for='correo'>Correo:</label>
    <input type='email' name='correo'><br><br>
    
    <label for='asunto'>Asunto:</label>
    <input type='text' name='asunto'><br><br>
    
    <label for='mensaje'>Mensaje:</label><br>
    <textarea name='mensaje' rows='5'></textarea><br><br>
    
    <button type='button' onclick='enviarMensaje()'>Enviar</button>
    </form>"
?> 
