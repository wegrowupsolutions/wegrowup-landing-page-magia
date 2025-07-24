<?php get_header(); ?>

<main class="main-content">
    <div class="container" style="padding: 3rem 0;">
        <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post(); ?>
                <article style="max-width: 800px; margin: 0 auto;">
                    <!-- Featured Image -->
                    <?php if (has_post_thumbnail()): ?>
                        <div style="margin-bottom: 2rem;">
                            <img src="<?php the_post_thumbnail_url('large'); ?>" 
                                 alt="<?php the_title(); ?>" 
                                 style="width: 100%; height: 400px; object-fit: cover; border-radius: 12px;">
                        </div>
                    <?php endif; ?>
                    
                    <!-- Post Header -->
                    <header style="margin-bottom: 2rem; text-align: center;">
                        <h1 style="font-size: 2.5rem; color: hsl(var(--primary)); margin-bottom: 1rem; font-family: 'EB Garamond', serif;">
                            <?php the_title(); ?>
                        </h1>
                        
                        <div style="color: hsl(var(--muted-foreground)); margin-bottom: 1rem;">
                            <span>Por <?php the_author(); ?></span> • 
                            <span><?php the_date(); ?></span>
                            <?php if (get_the_category()): ?>
                                • <span><?php the_category(', '); ?></span>
                            <?php endif; ?>
                        </div>
                        
                        <?php if (has_excerpt()): ?>
                            <div style="font-size: 1.1rem; color: hsl(var(--muted-foreground)); font-style: italic;">
                                <?php the_excerpt(); ?>
                            </div>
                        <?php endif; ?>
                    </header>
                    
                    <!-- Post Content -->
                    <div style="line-height: 1.8; font-size: 1.1rem;">
                        <?php the_content(); ?>
                    </div>
                    
                    <!-- Post Tags -->
                    <?php if (get_the_tags()): ?>
                        <div style="margin-top: 3rem; padding-top: 2rem; border-top: 1px solid hsl(var(--border));">
                            <h3 style="margin-bottom: 1rem; color: hsl(var(--primary));">Tags:</h3>
                            <div style="display: flex; gap: 0.5rem; flex-wrap: wrap;">
                                <?php the_tags('<span style="background: hsl(var(--muted)); padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.875rem;">', '</span><span style="background: hsl(var(--muted)); padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.875rem;">', '</span>'); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    <!-- Author Bio -->
                    <div style="margin-top: 3rem; padding: 2rem; background: hsl(var(--muted)); border-radius: 12px;">
                        <div style="display: flex; gap: 1rem; align-items: center;">
                            <?php echo get_avatar(get_the_author_meta('ID'), 80, '', '', array('style' => 'border-radius: 50%;')); ?>
                            <div>
                                <h3 style="margin-bottom: 0.5rem; color: hsl(var(--primary));">
                                    <?php the_author(); ?>
                                </h3>
                                <p style="color: hsl(var(--muted-foreground));">
                                    <?php echo get_the_author_meta('description') ?: 'Autor do blog Wegrowup.'; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </article>
                
                <!-- Navigation -->
                <div style="max-width: 800px; margin: 3rem auto 0; display: flex; justify-content: space-between; align-items: center;">
                    <div>
                        <?php previous_post_link('%link', '← Post Anterior'); ?>
                    </div>
                    <div>
                        <a href="<?php echo home_url('/blog'); ?>" class="btn btn-outline" style="color: hsl(var(--primary)); border-color: hsl(var(--primary));">
                            Ver Todos os Posts
                        </a>
                    </div>
                    <div>
                        <?php next_post_link('%link', 'Próximo Post →'); ?>
                    </div>
                </div>
                
                <!-- Comments -->
                <?php if (comments_open() || get_comments_number()): ?>
                    <div style="max-width: 800px; margin: 3rem auto 0;">
                        <?php comments_template(); ?>
                    </div>
                <?php endif; ?>
                
            <?php endwhile; ?>
        <?php else: ?>
            <div style="text-align: center;">
                <h2>Post não encontrado</h2>
                <p>Desculpe, o post que você está procurando não existe.</p>
                <a href="<?php echo home_url(); ?>" class="btn btn-primary">Voltar ao Início</a>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>