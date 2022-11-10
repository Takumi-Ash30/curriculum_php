<?php
  require_once("getData.php");
  $user = new getData();

  $info = $user->getUserData(); 
  $posts = $user->getPostData();
?>


<link rel="stylesheet" href="style.css">
<body>
  <div class="container">
    <img src="yilogo.png" alt="" class="img">
    <div class="user_info">
      <div class="user_name">
        <p>ようこそ <?php echo $info['last_name'].$info['first_name']?> さん</p>  
      </div>
    
      <div class="user_log">
        <p>最終ログイン日：<?php echo $info['last_login']?></p>  
      </div>
    </div>
  </div>

  <div class="table">
    <table>
      <thead>
        <th>記事ID</th>
        <th>タイトル</th>
        <th>カテゴリ</th>
        <th>本文</th>
        <th>投稿日</th>
      </thead>

      <tbody>
        <?php foreach($posts as $post) { ?>
        <tr>
          <td><?php echo $post['id'] ?></td>
          <td><?php echo $post['title'] ?></td>
          <?php switch($post['category_no']) {
            case 1: $category = "食事"; break;
            case 2: $category = "旅行"; break;
            case 3: $category = "その他"; break;
          }?>
          <td><?php echo $category ?></td>
          <td><?php echo $post['comment'] ?></td>
          <td><?php echo $post['created'] ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  
  <footer>Y&I group.inc</footer>
</body>