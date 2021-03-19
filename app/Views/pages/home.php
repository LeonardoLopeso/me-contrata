<section class="container">
    <div class="pessoas-info">
        <div class="pessoa-wraper">
            <?php 
                for ($i=0; $i<=6;$i++)
                {
            ?>
            <div class="pessoa-single">
                <div class="pessoa-foto"></div>
                <div class="pessoa-desc">
                    <div class="pessoa-desc-nome">
                        <h3>Nome da pessoa</h3>
                    </div>
                    <div class="pessoa-desc-descricao">
                        <p>Uma descrição qualquer da pessoa para que as empresas possa ter um chonhecimento prévio.</p>
                    </div>
                    <div class="pessoa-desc-contato">
                        <span>
                            <i class="fa fa-whatsapp"></i>
                            <i class="fa fa-instagram"></i>
                            <i class="fa fa-facebook"></i>
                        </span>
                        <span>(84)99999-8888</span>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>