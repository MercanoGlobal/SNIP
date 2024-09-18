			<?php $this->load->view('defaults/footer_message'); ?>
		</div>
<?php

//codemirror modes
if(isset($codemirror_modes)){
    echo '<div style="display: none;" id="codemirror_modes">' . json_encode($codemirror_modes) . '</div>';
}

//stats
$this->load->view('defaults/stats');

//Javascript
$this->carabiner->js('jquery.js');
$this->carabiner->js('bootstrap.min.js');
$this->carabiner->js('jquery.timers.js');
//$this->carabiner->js('jquery.dataTables.min.js');
$this->carabiner->js('codemirror/lib/codemirror.js');


$this->carabiner->js('snip.js');

$this->carabiner->display('js');

?>

<!-- External GDPR JS Cookie Script https://cookie-bar.eu/ -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/cookie-bar/cookiebar-latest.min.js?theme=flying&always=1"></script>

	</body>
</html>
