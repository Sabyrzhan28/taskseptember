<header class="masthead">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Задачник на PHP</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        <a href="/add" class='d-flex justify-content-center'><b>Добавить задачи</b></a>
        <div class="sort-by d-flex justify-content-around">
        <a href="/" class='d-flex justify-content-center'><b>Сортировка по имени</b></a>
        <a href="/" class='d-flex justify-content-center'><b>Сортировка email</b></a>
        <a href="/" class='d-flex justify-content-center'><b>Сортировка по статусу</b></a>
        </div>
        <hr class="hr-black">
            <?php if (empty($list)): ?>
                <p>Список задач пуст</p>
            <?php else: ?>
                <?php 
                    foreach ($list as $val): ?>
                    <div class="post-any d-flex">
                    <div class="post-preview">
                        <a href="">
                            <h2 class="post-title"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></h2>
                            <h5 class="post-subtitle"><?php echo htmlspecialchars($val['email'], ENT_QUOTES); ?></h5>
                        </a>
                        <p class="post-meta"><?php echo htmlspecialchars($val['text'], ENT_QUOTES); ?></p>
                    </div>

                    <h5 class="post-meta pt-5"><?php 
                                if($val['isDone']==1){
                                    echo htmlspecialchars('Статус: ✔', ENT_QUOTES);
                                }else{
                                    echo htmlspecialchars('Статус: -', ENT_QUOTES);
                                }
                        ?></h5>
                    </div>
                    
                    <hr>
                <?php endforeach; ?>
                <div class="clearfix">
                    <?php echo $pagination; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>