<?php include('templates/header.php');?>
<!DOCTYPE html>
<html class="bagGround">
        <form  class="block" action="sql_tipusHabitacio.php" method="POST"> 
        <div class="box">
            <div class="field">
                <p class="control has-icons-left has-icons-right">
                    <label for="nom">Nom:</label>
                    <input class="input" type="text" name="nom" required="">
                    <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-check"></i>
                    </span>
                </p>
            </div>

            <div class="field">
                <p class="control has-icons-left has-icons-right">
                    <label for="multi-preu">Preu:</label>
                    <input class="input" type="number" name="preu" required="">
                    <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-check"></i>
                    </span>
                </p>
            </div>
            
            <div class="field">
                <p class="control has-icons-left">
                    <label for="multi-descripcio">Descripcio:</label>
                    <input class="input" type="text" name="descripcio"  required="">
                    <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-check"></i>
                    </span>
                </p>
            </div>

            <div class="field">
                <p class="control has-icons-left">
                    <label for="multi-capacitat">Capacitat:</label>
                    <input class="input" type="number" name="capacitat" required="">
                    <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-check"></i>
                    </span>
                </p>
            </div>

            <div class="field">
                <p class="control has-icons-left">
                    <label for="multi-codi">Codi:</label>
                    <input class="input" type="text" name="codi" required="">
                    <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-check"></i>
                    </span>
                </p>
            </div>

            <div class="field">
                <p class="control has-icons-left">
                    <label for="multi-foto">Foto:</label>
                    <input class="input" type="text" name="Foto" required="">
                    <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-check"></i>
                    </span>
                </p>
            </div>
            <div class="container center-h center-v">
                    <input  class="button is-success  style-buttons" type="submit" value="ENVIAR">
                    <button class="button is-info style-buttons" onclick="window.location.href='index.php'">INICIO</button>
            </div>
            </div>         
    </form>
</html>
