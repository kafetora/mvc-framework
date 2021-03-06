<?php $this->setLayoutVar( 'title', 'ホーム' ); ?>

<h2>ホーム</h2>

<form action="<?php echo $base_url; ?>/status/post" method="POST">
  <input type="hidden" name="_token" value="<?php echo $this->escape( $_token ); ?>">

  <?php // error ?>

  <textarea name="body" id="" cols="60" rows="2">
    <?php echo $this->escape( $body ); ?>
  </textarea>

  <p>
    <input type="submit" value="発言">
  </p>

  <div id="statuses">
    <?php foreach( $statuses as $status ): ?>
      <div class="status">

        <div class="status_content">
          <?php echo $this->escape( $status['user_name'] ); ?>
          <?php echo $this->escape( $status['body'] ); ?>
        </div>

        <div>
          <?php echo $this->escape( $status['created_at'] ); ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

</form>
