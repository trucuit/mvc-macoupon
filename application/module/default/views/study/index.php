<?php

$listStudy = $this->listStudy;
$linkOpen = $this->linkOpen;
$listItem = empty($this->listItem) ? [] : $this->listItem;
foreach ($linkOpen as $value) {
    $openLink[] = $value['name'];
}
?>
<div class="logo-item">

    <div class="container">
        <div class="row">
            <?php foreach ($listStudy as $value):
            $domain = Helper::cutCharacter($value['domain'], '/', '.');
            $linkAjax = URL::createLink('default', 'study', 'ajax', ['id' => $domain]);
            $linkOpen = (in_array($value['domain'], $openLink)) ? URL_ACCESSTRADE . "?url=" . urlencode($value['domain']) : "#";
            ?>
            <div class="card">
                <div class="card-block">
                    <div class="logo-product">
                        <a href="<?php echo $linkOpen ?>"
                           title="<?php echo $value['title'] ?>"
                           onclick="selectAjax(<?php echo "'" . $linkAjax . "'" ?>, <?php echo "'" . $value['domain'] . "'" ?>)"
                           <?php if ($linkOpen != "#") echo 'target="_blank"' ?>
                           >
                           <img src="<?php echo $value['logo'] ?>" class="card-img-top">
                       </a>
                   </div>
               </div>
           </div>
       <?php endforeach ?>
   </div>
</div>
<div class="w-100 "></div>

<div id="loader"></div>
<div class="product-item">

    <?php if (!empty($listItem)) { ?>
    <div class="container">
       <h2 class="text-center"><?php echo $listItem['domain'] ?></h2>
       <p class="description"><?php echo $listItem['description'] ?></p>
       <div class="row ">
        <?php foreach ($listItem['title'] as $key => $value): ?>
            <div class="col-md-4 col-sm-6 ">
                <a href="<?php if (isset($listItem['link'][$key])) echo $listItem['link'][$key] ?>"
                   target="_blank">
                   <div class="product-detail">
                    <img src="<?php if (isset($listItem['image'][$key])) echo $listItem['image'][$key] ?>"
                    alt="Card image cap">
                    <div class="intro">
                        <h6><?php if (isset($listItem['title'][$key])) echo $listItem['title'][$key] ?></h6>
                        <p class="price">
                            <strike>
                                <?php if (isset($listItem['giacu'][$key])) {
                                    echo $listItem['giacu'][$key];
                                }
                                ?>
                            </strike>
                            <strong><?php if (isset($listItem['price'][$key])) echo $listItem['price'][$key] ?></strong>
                        </p>
                        <p class="time">
                            <?php if (isset($listItem['time'][$key])) echo $listItem['time'][$key] ?>
                        </p>
                    </div>
                </div>
            </a>
        </div>
    <?php endforeach ?>
</div>
</div>
<?php } ?>
</div>
</div>
