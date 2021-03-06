<div class="body">
    <div class="page-header">
        <?php $this->title = 'Edit Post'; ?>
        <h1><?=htmlspecialchars($this->title)?></h1>
    </div>
    <br>
    <br>
    <div class="create-new-form">
    <form method="post">
        <div class="create-new-post-header">Title</div>
        <input type="text" name="post_title" value="<?=
        htmlspecialchars($this->post['title'])?>" />
        <div class="create-new-post-header">Content</div>
        <textarea id="post-description" name="post_content"><?=
            htmlspecialchars($this->post['content'])?></textarea>
        <div class="create-new-post-header">Date (yyyy-MM-dd hh:mm:ss):</div>
        <input type="text" name="post_date" value="<?=
        htmlspecialchars($this->post['date'])?>" />
        <br>
        <br>
        <?php
             if ($this->post['user_id'] == htmlspecialchars($_SESSION['user_id'])) {
               echo " <div><input type=\"submit\" value=\"Edit\"></div>";
             } else {
                 $this->redirect('myposts');
             }?>
        <div class="cancel-button">
            <a href="<?=APP_ROOT?>/myposts">Cancel</a></div>
        <br>
        <br>
    </form>
</div>
