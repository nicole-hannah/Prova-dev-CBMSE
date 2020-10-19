<div id="message" class="animated pulse">
    <div style="padding: 5px;">
        <div id="inner-message" class="alert alert-error" style="background-color: rgba(255, 75, 75, 0.6)">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= h($message) ?>
        </div>
    </div>
</div>
<script>
    jQuery('.close').click(function (){
        document.getElementById('message').style.display= 'none';
    });
</script>
