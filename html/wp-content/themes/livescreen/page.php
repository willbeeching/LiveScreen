<?php get_header(); ?>
<?php // Some css is inline to ensure we don't get a flash of white as the page is loading ?>
<?php $server = get_field( 'server' );?>
<div class="server-details">
	<?php if($server['show_logo'] == true) {?>
	<div class="server-details-logo">
		<?php if(!empty($server['logo'])) {
		echo wp_get_attachment_image($server['logo'], 'full');
		} else { ?>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/plex.svg" alt="Plexflix Logo"/>
		<?php };?>
	</div>
	<?php };?>
</div>
<?php // Pulls in all the posts that are in the post type of 'tv_show'?>
<?php query_posts(array('post_type' => 'tv_show') );
$main = [];
// While there are posts we add them into our own array so that we can have the logo attached to multiple slides
while (have_posts()) : the_post();
	$photos = get_field( 'photos' );
	$logo = get_field( 'logo' );
	$ratio = get_field( 'ratio' );
	foreach ($photos as $photo) {
		$slides[] = array("photo" => $photo, "logo" => $logo, "ratio" => $ratio);
	};
	// Merge current set into our main array
	$main = array_merge($main, $slides);
endwhile;
wp_reset_postdata();
// Shuffle the order
shuffle($main);?>
<ul>
	<?php foreach ($main as $slick) {?>
	<li style="opacity:0;">
		<div>
			<div data-ratio="<?php echo $slick['ratio'];?>">
				<?php $logoUrl = wp_get_attachment_image_url($slick['logo'], 'full');?>
				<img src="<?php echo $logoUrl;?>" alt="Logo"/>
			</div>
		</div>
		<?php $slideUrl = wp_get_attachment_image_url($slick['photo']['photo'], 'full');?>
		<?php // Data lazy is for slick slider to lazy load the images?>
		<img data-lazy="<?php echo $slideUrl;?>" alt="Slide" style="width:100%; height:100%;" />
	</li>
	<?php };?>
</ul>
<?php get_footer(); ?>