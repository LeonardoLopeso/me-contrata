<section class="container">
    <div class="pessoas-info">
        <div class="pessoa-wraper">
            <?php 
                foreach($arr['consulta'] as $value){
            ?>
            <div class="pessoa-single">
                <div class="pessoa-foto">
                    <img src="<?php echo INCLUDE_PATH_FULL.'uploads/'.$value['foto']; ?>">
                </div>
                <div class="pessoa-desc">
                    <div class="pessoa-desc-nome">
                        <h3><?php echo $value['nome']; ?></h3>
                        <h5><?php echo $value['funcao']; ?></h5>
                    </div>
                    <div class="pessoa-desc-descricao">
                        <p><?php echo $value['descricao']; ?></p>
                    </div>
                    <div class="pessoa-desc-contato">
                        <span>
                            <i class="fa fa-whatsapp"></i>
                            <i class="fa fa-instagram"></i>
                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-linkedin"></i>
                            <i class="fa fa-telegram"></i>
                        </span>
                        <span><?php echo $value['telefone']; ?></span>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>