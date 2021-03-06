<?php
// Template Name: Contato
get_header();
?>

<?php if(have_posts()) { while(have_posts()) {  the_post();  ?>

<main class="container contato">
  <h1 class="subtitulo separador">Contato</h1>
  <form action="<?php echo get_template_directory_uri(); ?>/enviar.php" method="POST" name="form" class="formphp grid-8 contato_form form">
			<label for="nome">Nome</label>
			<input id="nome" name="nome" type="text" required>
			<label for="email">E-mail</label>
			<input id="email" name="email" type="email" required>
			<label for="telefone">Telefone</label>
			<input id="telefone" name="telefone" type="text">

			<label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
			<input type="text" class="nao-aparece" name="leaveblank">
			<label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
			<input type="text" class="nao-aparece" name="dontchange" value="http://">

			<label for="mensagem">Mensagem</label>
			<textarea name="mensagem" id="mensagem" rows="5" required></textarea>

			<button id="enviar" name="enviar" type="submit" class="btn btn-preto">Enviar Mensagem</button>
		</form>
		
		<section class="contato-dados">
			<ul>
				<?php if(have_rows('dados')) { while(have_rows('dados')) { the_row(); ?>
				<li>
					<h3><?php the_sub_field('titulo'); ?></h3>
					<p><?php the_sub_field('valor'); ?></p>
				</li>
				<?php } }?>
			</ul>

			<h3>Redes Sociais</h3>
			<?php include(get_template_directory() . '/inc/redes-sociais.php');?>
		</section>
</main>

<?php } } ?>
<?php get_footer(); ?>
