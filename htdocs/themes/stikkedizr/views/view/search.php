<form class="form-inline" action="<?php echo site_url('lists'); ?>">
    <div class="form-group">
        <?php
            $searchValue = $this->input->get('search');
            $encodedSearch = $searchValue !== null ? htmlspecialchars($searchValue, ENT_QUOTES, 'UTF-8') : '';
        ?>
        <input id="search" name="search" type="text" placeholder="search" class="form-control input-medium" value="<?php echo $encodedSearch; ?>" />
    </div>
</form>
