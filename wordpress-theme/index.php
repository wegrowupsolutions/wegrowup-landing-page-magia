<?php get_header(); ?>

<main class="main-content">
    <?php if (is_home() && !is_paged()): ?>
        <!-- Hero Section for Homepage -->
        <section class="hero-section">
            <div class="container">
                <h1 class="hero-title">Transformando Negócios Digitais</h1>
                <p class="hero-subtitle">Plataforma completa de soluções digitais: pagamentos, marketplace, conexão de freelancers e atendimento com IA.</p>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                    <a href="/contato" class="btn btn-primary">Começar Agora</a>
                    <a href="/sobre" class="btn btn-outline">Saiba Mais</a>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <section style="padding: 3rem 0;">
        <div class="container">
            <?php if (have_posts()): ?>
                <?php if (is_home()): ?>
                    <h2 style="text-align: center; margin-bottom: 3rem; font-size: 2.5rem; color: hsl(var(--primary));">Últimas Novidades</h2>
                <?php endif; ?>
                
                <div class="posts-grid">
                    <?php while (have_posts()): the_post(); ?>
                        <article class="post-card">
                            <?php if (has_post_thumbnail()): ?>
                                <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="post-image">
                            <?php endif; ?>
                            
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                
                                <div class="post-excerpt">
                                    <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                                </div>
                                
                                <div class="post-meta">
                                    <span><?php the_date(); ?></span> | 
                                    <span><?php the_author(); ?></span>
                                    <?php if (get_the_category()): ?>
                                        | <span><?php the_category(', '); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>

                <!-- Pagination -->
                <div style="text-align: center; margin-top: 3rem;">
                    <?php 
                    echo paginate_links(array(
                        'prev_text' => '← Anterior',
                        'next_text' => 'Próximo →',
                    )); 
                    ?>
                </div>

            <?php else: ?>
                <div style="text-align: center; padding: 3rem 0;">
                    <h2>Nenhum post encontrado</h2>
                    <p>Desculpe, não há conteúdo disponível no momento.</p>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>