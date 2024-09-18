<?php $this->load->view("defaults/header");?>

<div class="about">
	<h1>About</h1>
	<p>SNIP is an Open-Source PHP Pastebin, with the aim of keeping a simple and easy to use user interface.</p>
    <p>SNIP allows you to easily share code with anyone you wish. Here are some features:</p>

    <ul>
        <li>Easy setup</li>
        <li>Syntax highlighting for many languages, including live syntax highlighting with CodeMirror</li>
        <li>Paste replies</li>
        <li>Diff view between the original paste and the reply</li>
        <li>An API</li>
        <li>File upload and preview</li>
        <li>Trending pastes</li>
        <li>Anti-Spam features</li>
        <li>Themes support</li>
        <li>Multilanguage support</li>
        <li>And many more... Visit the <a href="<?php echo proj_url(); ?>">GitHub Repo</a></li>
    </ul>

</div>

<?php $this->load->view("defaults/footer");?>
