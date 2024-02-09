<div id="content">
        <form action="pag.php" method="post">
            <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
            <input type="number" name="telefono" id="telefono" placeholder="Telefono" required>
            <input type="email" name="email" id="email" placeholder="Telefono" required>
            <select id="tipo" name="tipo">
                <option value="atasco" selected>Atasco</option>
                <option value="daño">Daño</option>
                <option value="insumo">Insumo</option>
                <option value="papel">Papel</option>
            </select>
            <textarea name="message" rows="10" cols="30"></textarea>
            <input type="submit" id="inicio" value="Inicio">

        </form>
        
</div>