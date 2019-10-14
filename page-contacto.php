<?php $page_name = "contacto" ?>
<?php include('header.php'); ?>
    
<section class="contact">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2 class="title">Contáctenos</h2>
        </div>
        <div class="col-md-6">
            <div class="form-container">
                <h3 class="subtitle"><img src="img/icon-consulta.png">Envíenos su consulta</h3>
                <p class="desc">Complete el formulario y nos comunicaremos a la brevedad.</p>
                <form>
                    <div class="main-form">
                        <input type="text" name="nombre" required placeholder="Su nombre (Requerido)">
                        <input type="email" name="email" required placeholder="Su E-mail (Requerido)">
                        <input type="text" name="empresa" placeholder="Su Empresa">
                        <input type="text" name="pais" placeholder="País">
                        <textarea name="mensaje" placeholder="Su Mensaje"></textarea>
                    </div>
                    <div class="flex">
                        <div>
                            <input type="submit" value="Enviar">
                            <div class="checkbox-container">
                                <input id="newsletter" name="newletter" type="checkbox">
                                <span class="checkmark"></span>
                                <label for="newsletter">Deseo recibir más información</label>
                            </div>
                        </div>
                        <div class="wpp">
                            <a href="tel:+5491167671341">Verónica Weinsman <br>+54 9 11 67671341</a>
                            <a href="tel:+5491126894948">Ernesto Larez <br>+54 9 11 26894948</a>
                        </div>
                    </div>
                </form>            
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-container">
                <h3 class="subtitle"><img src="img/icon-trabajar.png">Para trabajar con nosotros</h3>
                <p class="desc">Complete el formulario y nos comunicaremos a la brevedad.</p>
                <form>
                    <div class="main-form">
                        <input type="text" name="nombre" required placeholder="Su nombre (Requerido)">
                        <input type="email" name="email" required placeholder="Su E-mail (Requerido)">
                        <input type="text" name="empresa" placeholder="Su Empresa">
                        <input type="text" name="pais" placeholder="País">
                        <textarea name="mensaje" placeholder="Su Mensaje"></textarea>
                    </div>
                    <div>
                        <input type="submit" value="Enviar">
                        <div class="checkbox-container">
                            <input id="newsletter" name="newletter" type="checkbox">
                            <span class="checkmark"></span>
                            <label for="newsletter">Deseo recibir más información</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>