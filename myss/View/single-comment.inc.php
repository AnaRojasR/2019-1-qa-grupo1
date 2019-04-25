<!--
|-----------------------------------------------------------------------------|
| Note:                                                                       |
| The PHP variables that appear in this file, are declared in 'post.inc.php'. |
|-----------------------------------------------------------------------------|
-->

<div class="col-md-12 commentsblock border-top <?php echo $divClassName; ?>" style="display: none;">
    <div class="media" <?php if (strpos($divClassName, 'answer') !== false) echo 'style="margin-left: 20px;"' ?>>
        <div class="media-left"><a href="javascript:void(0)">
                <img <?php
                echo "src= " . $imageCommentOwner['userImage'];
                ?> alt="" class="media-object"> </a></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="media-body">
            <h4 class="media-heading"><a href="#">
                    <a href="<?php echo 'profile.php?' . $singleComment['commentOwner']; ?>">
                        <?php echo $singleComment['commentOwner']; ?>
                    </a>
                    <br>
                    <small>
                        <i class="fa fa-clock-o"></i> <?php echo $singleComment['time']; ?>
                    </small>
            </h4>
            <hr>
            <?php
            if ($singleComment['destination'] != '') { ?>
                <center>
                    <img style="max-width:200px;max-height:200px;" src="<?php echo $singleComment['destination']; ?>">
                </center>
                <br>
                <?php
            } ?>
            <p><?php echo $singleComment['text']; ?></p>
            <br>
            <ul class="nav nav-pills pull-left" id="<?php echo 'commentTags' . $postOrCommentCounter; ?>">
                <li><a id="commentLike"
                       href="#"
                    ><i class="far fa-thumbs-up"></i>
                        0
                    </a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php
                if (strpos($divClassName, 'answer') === false) {
                    ?>
                    <li><a href="#" title=""
                           onclick="toggleDivAnswer('<?php echo 'answer' . $singleComment['key']; ?>');" class="prevent"><i class="far fa-comment"></i>
                            </i>
                            <?php echo 'View replies (' . $numberOfAnswers . ')'; ?>
                        </a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li><a href="#" title="" data-toggle="modal" data-target="#<?php echo 'modal' . $commentCounter;?>" class="prevent">
                            <i class="far fa-comment-dots"></i> Reply</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                } ?>
                <li><a href="#" title="" class="prevent"><i class="fas fa-tags"></i>
                        <?php echo str_replace(',', ', ', $singleComment['tagsComment']); ?>
                    </a></li>
            </ul>
            <br>
            <hr>
        </div>
    </div>
</div>

<?php
include 'modal-answer.php';
?>

