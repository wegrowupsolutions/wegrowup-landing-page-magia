    <footer class="site-footer">
        <div class="container">
            <div class="footer-content">
                <!-- About Section -->
                <div class="footer-section">
                    <h3>Sobre a Wegrowup</h3>
                    <p>Transformamos negócios através de soluções digitais inovadoras. Nossa plataforma integra pagamentos, marketplace, freelancers e atendimento com IA.</p>
                </div>
                
                <!-- Quick Links -->
                <div class="footer-section">
                    <h3>Links Rápidos</h3>
                    <a href="<?php echo home_url('/sobre'); ?>">Sobre</a>
                    <a href="<?php echo home_url('/servicos'); ?>">Serviços</a>
                    <a href="<?php echo home_url('/blog'); ?>">Blog</a>
                    <a href="<?php echo home_url('/contato'); ?>">Contato</a>
                </div>
                
                <!-- Services -->
                <div class="footer-section">
                    <h3>Nossos Serviços</h3>
                    <a href="#">WePay - Pagamentos</a>
                    <a href="#">WeShop - Marketplace</a>
                    <a href="#">WeConnect - Freelancers</a>
                    <a href="#">SeuAgente - Atendimento IA</a>
                </div>
                
                <!-- Contact Info -->
                <div class="footer-section">
                    <h3>Contato</h3>
                    <a href="mailto:contato@wegrowup.com">contato@wegrowup.com</a>
                    <a href="tel:+5511999999999">(11) 99999-9999</a>
                    <div style="margin-top: 1rem;">
                        <a href="#" style="margin-right: 1rem;">Facebook</a>
                        <a href="#" style="margin-right: 1rem;">Instagram</a>
                        <a href="#" style="margin-right: 1rem;">LinkedIn</a>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>
    
    <?php wp_footer(); ?>
</body>
</html>