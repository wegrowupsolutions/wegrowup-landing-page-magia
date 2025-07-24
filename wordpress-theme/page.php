<?php get_header(); ?>

<main class="main-content">
    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
            
            <!-- Hero Section (if enabled) -->
            <?php 
            $show_hero = get_post_meta(get_the_ID(), '_wegrowup_show_hero', true);
            $hero_title = get_post_meta(get_the_ID(), '_wegrowup_hero_title', true);
            $hero_subtitle = get_post_meta(get_the_ID(), '_wegrowup_hero_subtitle', true);
            
            if ($show_hero): ?>
                <section class="hero-section">
                    <div class="container">
                        <h1 class="hero-title">
                            <?php echo $hero_title ?: get_the_title(); ?>
                        </h1>
                        <?php if ($hero_subtitle): ?>
                            <p class="hero-subtitle"><?php echo $hero_subtitle; ?></p>
                        <?php endif; ?>
                    </div>
                </section>
            <?php endif; ?>
            
            <div class="container" style="padding: 3rem 0;">
                <article style="max-width: 1000px; margin: 0 auto;">
                    
                    <!-- Page Header (if no hero) -->
                    <?php if (!$show_hero): ?>
                        <header style="margin-bottom: 3rem; text-align: center;">
                            <h1 style="font-size: 3rem; color: hsl(var(--primary)); margin-bottom: 1rem; font-family: 'EB Garamond', serif;">
                                <?php the_title(); ?>
                            </h1>
                        </header>
                    <?php endif; ?>
                    
                    <!-- Featured Image -->
                    <?php if (has_post_thumbnail() && !$show_hero): ?>
                        <div style="margin-bottom: 3rem;">
                            <img src="<?php the_post_thumbnail_url('large'); ?>" 
                                 alt="<?php the_title(); ?>" 
                                 style="width: 100%; height: 400px; object-fit: cover; border-radius: 12px;">
                        </div>
                    <?php endif; ?>
                    
                    <!-- Page Content -->
                    <div style="line-height: 1.8; font-size: 1.1rem;">
                        <?php the_content(); ?>
                    </div>
                    
                    <!-- Contact Form (if contact page) -->
                    <?php if (is_page('contato')): ?>
                        <div style="margin-top: 3rem; padding: 2rem; background: hsl(var(--muted)); border-radius: 12px;">
                            <h3 style="margin-bottom: 2rem; color: hsl(var(--primary));">Entre em Contato</h3>
                            
                            <form method="post" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">
                                <div style="display: grid; gap: 1rem; margin-bottom: 1rem;">
                                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                                        <input type="text" name="nome" placeholder="Seu Nome" required 
                                               style="padding: 0.75rem; border: 1px solid hsl(var(--border)); border-radius: 8px; background: hsl(var(--background));">
                                        <input type="email" name="email" placeholder="Seu Email" required
                                               style="padding: 0.75rem; border: 1px solid hsl(var(--border)); border-radius: 8px; background: hsl(var(--background));">
                                    </div>
                                    <input type="text" name="assunto" placeholder="Assunto" required
                                           style="padding: 0.75rem; border: 1px solid hsl(var(--border)); border-radius: 8px; background: hsl(var(--background));">
                                    <textarea name="mensagem" rows="5" placeholder="Sua Mensagem" required
                                              style="padding: 0.75rem; border: 1px solid hsl(var(--border)); border-radius: 8px; background: hsl(var(--background)); resize: vertical;"></textarea>
                                </div>
                                <button type="submit" name="submit_contact" class="btn btn-primary">
                                    Enviar Mensagem
                                </button>
                            </form>
                            
                            <?php
                            // Simple contact form handler
                            if (isset($_POST['submit_contact'])) {
                                $nome = sanitize_text_field($_POST['nome']);
                                $email = sanitize_email($_POST['email']);
                                $assunto = sanitize_text_field($_POST['assunto']);
                                $mensagem = sanitize_textarea_field($_POST['mensagem']);
                                
                                $to = get_option('admin_email');
                                $subject = 'Contato do site: ' . $assunto;
                                $body = "Nome: $nome\nEmail: $email\n\nMensagem:\n$mensagem";
                                $headers = array('Content-Type: text/plain; charset=UTF-8', "From: $nome <$email>");
                                
                                if (wp_mail($to, $subject, $body, $headers)) {
                                    echo '<div style="margin-top: 1rem; padding: 1rem; background: #d4edda; color: #155724; border-radius: 8px;">Mensagem enviada com sucesso!</div>';
                                } else {
                                    echo '<div style="margin-top: 1rem; padding: 1rem; background: #f8d7da; color: #721c24; border-radius: 8px;">Erro ao enviar mensagem. Tente novamente.</div>';
                                }
                            }
                            ?>
                        </div>
                    <?php endif; ?>
                    
                    <!-- Services Grid (if services page) -->
                    <?php if (is_page('servicos')): ?>
                        <div style="margin-top: 3rem;">
                            <div class="posts-grid">
                                <div class="post-card">
                                    <div style="padding: 2rem; text-align: center;">
                                        <div style="width: 60px; height: 60px; background: var(--gradient-primary); margin: 0 auto 1rem; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem; font-weight: bold;">
                                            💳
                                        </div>
                                        <h3 style="color: hsl(var(--primary)); margin-bottom: 1rem;">WePay</h3>
                                        <p>Sistema completo de pagamentos digitais com integração PIX, cartão e boleto.</p>
                                    </div>
                                </div>
                                
                                <div class="post-card">
                                    <div style="padding: 2rem; text-align: center;">
                                        <div style="width: 60px; height: 60px; background: var(--gradient-primary); margin: 0 auto 1rem; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem; font-weight: bold;">
                                            🛍️
                                        </div>
                                        <h3 style="color: hsl(var(--primary)); margin-bottom: 1rem;">WeShop</h3>
                                        <p>Marketplace completo para vendedores e compradores com gestão integrada.</p>
                                    </div>
                                </div>
                                
                                <div class="post-card">
                                    <div style="padding: 2rem; text-align: center;">
                                        <div style="width: 60px; height: 60px; background: var(--gradient-primary); margin: 0 auto 1rem; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem; font-weight: bold;">
                                            🤝
                                        </div>
                                        <h3 style="color: hsl(var(--primary)); margin-bottom: 1rem;">WeConnect</h3>
                                        <p>Plataforma de conexão entre freelancers e empresas para projetos digitais.</p>
                                    </div>
                                </div>
                                
                                <div class="post-card">
                                    <div style="padding: 2rem; text-align: center;">
                                        <div style="width: 60px; height: 60px; background: var(--gradient-primary); margin: 0 auto 1rem; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem; font-weight: bold;">
                                            🤖
                                        </div>
                                        <h3 style="color: hsl(var(--primary)); margin-bottom: 1rem;">SeuAgente</h3>
                                        <p>Atendimento inteligente com IA para suporte 24/7 aos seus clientes.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                </article>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <div class="container" style="padding: 3rem 0; text-align: center;">
            <h2>Página não encontrada</h2>
            <p>Desculpe, a página que você está procurando não existe.</p>
            <a href="<?php echo home_url(); ?>" class="btn btn-primary">Voltar ao Início</a>
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>