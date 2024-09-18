<form class="form-horizontal" action="<?php echo site_url('lists'); ?>">
    <div class="control-group searchgroup">
        <div class="controls">
            <?php
                $searchValue = $this->input->get('search');
                $encodedSearch = $searchValue !== null ? htmlspecialchars($searchValue, ENT_QUOTES, 'UTF-8') : '';
            ?>
            <input id="search" name="search" type="text" placeholder="search" class="input-medium" value="<?php echo $encodedSearch; ?>" />
        </div>
    </div>
</form>
