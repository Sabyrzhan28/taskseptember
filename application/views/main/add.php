<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">
                <div class="d-flex">
                <a href="/"><b>Назад</b></a>
                </div>
            </div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-sm-4">
                        <form action="/admin/add" method="post">
                            <div class="form-group">
                                <label>Имя пользователя</label>
                                <input class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label>e-mail</label>
                                <input class="form-control" type="text" name="email">
                            </div>
                            <div class="form-group">
                                <label>Текст задачи</label>
                                <textarea class="form-control" rows="3" name="text"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Добавить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>