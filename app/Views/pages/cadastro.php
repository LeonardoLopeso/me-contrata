<div class="container">
    <div class="cadastro">
        <form method="post" enctype="multipart/form-data">
            <div class="cadastro-form">
                <h3>Preencha o formulário de cadastro</h3>
                <h5>Os campos com <span style="color:red;">*</span> são obrigatórios</h5>
                <input type="text" name="nome" placeholder="Nome completo *">
                <input type="text" name="telefone" placeholder="(00)00000-0000 *">
                <input type="checkbox"><span>Se não tiver WhatsApp marque esta opção</span>
                <input type="email" name="email" placeholder="E-mail *">
                <input type="text" name="funcao" placeholder="Função ou Habilidade *">
                <input type="file" name="foto">
                <span>Escolha uma foto para o perfil</span>
                <textarea name="desc" placeholder="Descreva suas habilidades ou fale de você"></textarea>
            </div>
            <div class="cadastro-medias">
                <div class="cadastro-medias-socais">
                    <h3>Redes Sociais</h3>
                    <h5>Adicione as redes sociais que possuir</h5>
                    <div class="cadastro-medias-icon">
                        <i class="fa fa-instagram"></i><input type="text" name="instagram" placeholder="Instagram">
                    </div>
                    <div class="cadastro-medias-icon">
                    <i class="fa fa-facebook"></i><input type="text" name="facebook" placeholder="Facebook">
                    </div>
                    <div class="cadastro-medias-icon">
                    <i class="fa fa-linkedin"></i><input type="text" name="Linkedin" placeholder="Linkedin">
                    </div>
                    <div class="cadastro-medias-icon">
                    <i class="fa fa-telegram"></i><input type="text" name="telegram" placeholder="Telegram">
                    </div>
                </div>
                <div class="cadastro-img">
                    <div class="">
                        <img src="<?php echo INCLUDE_PATH_FULL ?>img/medias.png">
                    </div>
                </div>
            </div>
            <div class="cadastro-form-btn">
                <input type="submit" value="Cadastrar">
            </div>
        </form>
    </div>
    <div class=""></div>
</div>