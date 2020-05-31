<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 com-sm-12">
                    <div class="the-game">
                        <h3>O jogo</h3>
                        <!-- <ul>
                            <li><a href="">Eventos</a></li>
                            <li><a href="">Informações</a></li>
                            <li><a href="">Regras</a></li>
                            <li><a href="">Notícias</a></li>
                            <li><a href="">Comunidade</a></li>
                            <li><a href="">Painel</a></li>
                        </ul> -->
                        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu') ); ?>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 com-sm-12">
                    <div class="suport">
                        <h3>Suporte</h3>
                        <?php wp_nav_menu( array( 'theme_location' => 'suporte-menu') ); ?>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 com-sm-12">
                    <div class="status">
                        <h3>Status do servidor</h3>
        
                    </div>
                </div>
            </div>
        </div>
    </footer>


    
    <?php wp_footer();?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>

<script type="text/javascript">

    $('a[href^="#open"]').click(function(){
    $(".nav-link").toggleClass("open");
    });


    $('#pesquisar').click(function(){
    $("#s").addClass(".abrir-busca");
    });
</script>