<section class="container">
    <div class="titulo-info">
        <h5>Trabalhadores cadastrados</h5>
    </div>
    <div class="pessoas-info">
        <div class="pessoa-wraper">
            <?php 
                $msgWhats = 'Mensagem%20encaminha%20pelo%20Me-Contrata';
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
                            <?php if($value['whatsapp'] != 'não tem') echo '<a href="https://api.whatsapp.com/send?phone=55'.$value['telefone'].'&text='.$msgWhats.'"><i id="whatsapp" class="fa fa-whatsapp"></i></a>'; ?>
                            <?php if($value['instagram'] != 'não tem') echo '<a href=""><i id="instagram"  class="fa fa-instagram"></i></a>'; ?>
                            <?php if($value['facebook'] != 'não tem') echo '<a href="https://www.facebook.com/'.$value['facebook'].'"><i id="facebook" class="fa fa-facebook"></i></a>'; ?>
                            <?php if($value['linkedin'] != 'não tem') echo '<a href=""><i id="linkedin" class="fa fa-linkedin"></i></a>'; ?>
                            <?php if($value['telegram'] != 'não tem') echo '<a href=""><i id="telegram" class="fa fa-telegram"></i></a>'; ?>
                        </span>
                        <span><?php echo $value['telefone']; ?></span>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<section class="informe">
    
</section>