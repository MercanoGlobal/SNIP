<form class="form-horizontal" action="<?php echo site_url('lists'); ?>">
    <div class="item_group searchgroup">
        <div class="item">
            <label for="search"><?php echo lang('paste_search'); ?>
            </label>
            <?php
            $searchValue = $this->input->get('search');
            $encodedSearch = $searchValue !== null ? htmlspecialchars($searchValue, ENT_QUOTES, 'UTF-8') : '';
            ?>
            <input type="text" name="search" value="<?php echo $encodedSearch; ?>" id="search" maxlength="100" tabindex="1" />
        </div>
    </div>
</form>
