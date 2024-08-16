<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample HTML Page</title>

    <style>

body{
    margin-top:20px;
    background: #fafafa
}

.card {
    margin-bottom: 1.5rem;
    box-shadow: 0 .25rem .5rem rgba(0, 0, 0, .025)
}

.card-border-primary {
    border-top: 4px solid #2979ff
}

.card-border-secondary {
    border-top: 4px solid #efefef
}

.card-border-success {
    border-top: 4px solid #00c853
}

.card-border-info {
    border-top: 4px solid #3d5afe
}

.card-border-warning {
    border-top: 4px solid #ff9100
}

.card-border-danger {
    border-top: 4px solid #ff1744
}

.card-border-light {
    border-top: 4px solid #f8f9fa
}

.card-border-dark {
    border-top: 4px solid #6c757d
}

.card-header {
    border-bottom-width: 1px
}

.card-actions a {
    color: #495057;
    text-decoration: none
}

.card-actions svg {
    width: 16px;
    height: 16px
}

.card-actions .dropdown {
    line-height: 1.4
}

.card-title {
    font-weight: 500;
    margin-top: .1rem
}

.card-subtitle {
    font-weight: 400
}

.card-table {
    margin-bottom: 0
}

.card-table tr td:first-child,
.card-table tr th:first-child {
    padding-left: 1.25rem
}

.card-table tr td:last-child,
.card-table tr th:last-child {
    padding-right: 1.25rem
}

.card-img-top {
    height: 100%
}
.card {
    margin-bottom: 1.5rem;
    box-shadow: 0 0.25rem 0.5rem rgba(0,0,0,.025);
}

.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #e5e9f2;
    border-radius: .2rem;
}

.card-header:first-child {
    border-radius: calc(.2rem - 1px) calc(.2rem - 1px) 0 0;
}

.card-header {
    border-bottom-width: 1px;
}
.card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    color: inherit;
    background-color: #fff;
    border-bottom: 1px solid #e5e9f2;
}

    </style>
</head>
<body>
<main class="content">
    <div class="container p-0">

        <h1 class="h3 mb-3">Kanban Board</h1>

        <div class="row">
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="card card-border-primary">
                    <div class="card-header">
                        <div class="card-actions float-right">
                            <div class="dropdown show">
                                <a href="#" data-toggle="dropdown" data-display="static">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal align-middle">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="19" cy="12" r="1"></circle>
                                        <circle cx="5" cy="12" r="1"></circle>
                                    </svg>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title">Upcoming</h5>
                        <h6 class="card-subtitle text-muted"></h6>
                    </div>

                    <div class="card-body p-3">

                        <div class="card mb-3 bg-light">
                            <div class="card-body p-3">
                                <div class="float-right mr-n2">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" checked="">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                                <p>Muhammad Nafees</p>
                                <div class="float-right mt-n1">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" width="32" height="32" class="rounded-circle" alt="Avatar">
                                </div>
                                <a class="btn btn-outline-primary btn-sm" href="#">View</a>
                            </div>
                        </div>
                    <div class="card-body p-3">

                        <div class="card mb-3 bg-light">
                            <div class="card-body p-3">
                                <div class="float-right mr-n2">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" checked="">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                                <p>Aman-ullah</p>
                                <div class="float-right mt-n1">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" width="32" height="32" class="rounded-circle" alt="Avatar">
                                </div>
                                <a class="btn btn-outline-primary btn-sm" href="#">View</a>
                            </div>
                        </div>
                        <div class="card mb-3 bg-light">
                            <div class="card-body p-3">
                                <div class="float-right mr-n2">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" checked="">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                                <p>Saud Rehman</p>
                                <div class="float-right mt-n1">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" width="32" height="32" class="rounded-circle" alt="Avatar">
                                </div>
                                <a class="btn btn-outline-primary btn-sm" href="#">View</a>
                            </div>
                        </div>
                        <div class="card mb-3 bg-light">
                            <div class="card-body p-3">
                                <div class="float-right mr-n2">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                                <p>Habib-Ullah</p>
                                <div class="float-right mt-n1">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" width="32" height="32" class="rounded-circle" alt="Avatar">
                                </div>
                                <a class="btn btn-outline-primary btn-sm" href="#">View</a>
                            </div>
                        </div>
                        
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                
            </div>
        </div>

    </div>
</main>


</body>

</html>