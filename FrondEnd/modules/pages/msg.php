    <link rel="stylesheet" href="plugins/frolaCSS/froala_editor.css">
    <link rel="stylesheet" href="plugins/frolaCSS/froala_style.css">
    <link rel="stylesheet" href="plugins/frolaCSS/code_view.css">
    <link rel="stylesheet" href="plugins/frolaCSS/colors.css">
    <link rel="stylesheet" href="plugins/frolaCSS/emoticons.css">
    <link rel="stylesheet" href="plugins/frolaCSS/image_manager.css">
    <link rel="stylesheet" href="plugins/frolaCSS/image.css">
    <link rel="stylesheet" href="plugins/frolaCSS/line_breaker.css">
    <link rel="stylesheet" href="plugins/frolaCSS/quick_insert.css">
    <link rel="stylesheet" href="plugins/frolaCSS/table.css">
    <link rel="stylesheet" href="plugins/frolaCSS/file.css">
    <link rel="stylesheet" href="plugins/frolaCSS/char_counter.css">
    <link rel="stylesheet" href="plugins/frolaCSS/video.css">
    <link rel="stylesheet" href="plugins/frolaCSS/fullscreen.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">

        <!-- inicio contenedor -->
        <main class="page-content">
        <?php 
            $titlePage = "mensajes";
            $titleNav = "msg";
            include 'modules/components/nav-page.php';
        ?>
            <div class="card direct-chat direct-chat-primary ml-4">
                <div class="card-header">
                    <img class="direct-chat-img img-responsive border border-white rounded-circle" style="width: 7rem;height: 6rem;" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
                                alt="message user image">
                        <a href="perfile">
                            <div class="sidebar-header">
                                <div class="user-info mt-4 h5">
                                    <span class="user-name">Jhon
                                        <strong>Smith</strong>
                                    </span>
                                    <br>
                                    <span class="user-status m-4">
                                        <i class="fa fa-circle"></i>
                                        <span>Online</span>
                                    </span>
                                </div>
                            </div>
                        </a>

                    <div class="card-tools">
                        <span data-toggle="tooltip" title="3 New Messages" class="badge badge-primary " style="font-size:1rem;">3</span>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus" style="font-size:2rem;"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts"
                                data-widget="chat-pane-toggle">
                            <i class="fas fa-comments" style="font-size:2rem;"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times" style="font-size:2rem;"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <!-- Conversations are loaded here -->
                    <div class="direct-chat-messages" style="height:33rem;">
                        <?php for ($i=0; $i <2 ; $i++):?>
                            <div class="direct-chat-msg">
                                <div class="direct-chat-infos clearfix">
                                    <span class="direct-chat-name float-left h5">Alexander Pierce</span>
                                </div>
                                <div class="dropright">
                                    <img class="direct-chat-img" src="img/user1-128x128.jpg" alt="message user image"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <span class="direct-chat-timestamp m-2">23 Jan 2:00 pm</span>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="">Eliminar</a>
                                        <a class="dropdown-item" href="perfile">ver perfil</a>
                                    </div>
                                </div>
                                <div class="direct-chat-text float-left font-weight-bolder m-2 p-3 text-break" style="max-widht:55%;">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore, accusantium nesciunt sequi voluptatibus quis modi qui quos labore distinctio eaque!
                                </div>
                            </div>

                            <div class="direct-chat-msg right">
                                <div class="direct-chat-infos clearfix">
                                    <span class="direct-chat-name float-right h5">Sarah Bullock</span>
                                </div>
                                <div class="dropleft">
                                    <img class="direct-chat-img" src="img/user3-128x128.jpg" alt="message user image"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <span class="direct-chat-timestamp m-2">23 Jan 2:00 pm</span>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="">Eliminar</a>
                                    </div>
                                </div>
                                <div class="direct-chat-text float-right font-weight-bolder m-2 p-3 text-break" style="max-widht:55%;">
                                    You better believe it! Lorem ipsum dolor sit amet. Lorem ipsum, dolor sit amet consectetur adipisicing elit. In, temporibus?
                                </div>
                                
                            </div>
                        <?php endfor; ?>  

                    </div>
                    <!--/.direct-chat-messages-->

                    <!-- Contacts are loaded here -->
                    <div class="direct-chat-contacts">
                        <ul class="contacts-list">
                            <li>
                                <a>
                                    <img class="contacts-list-img" src="img/user1-128x128.jpg">
                                    <div class="contacts-list-info">
                                        <span class="contacts-list-name">
                                            Count Dracula
                                            <small class="contacts-list-date float-right">2/28/2015</small>
                                        </span>
                                        <span class="contacts-list-msg">How have you been? I was...</span>
                                    </div>
                                    <!-- /.contacts-list-info -->
                                </a>
                            </li>
                        </ul>
                    <!-- /.contacts-list -->
                    </div>
                    <!-- /.direct-chat-pane -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <form class="needs-validation-msg" novalidate>
                        <div class="row">
                            <div class="col-11">
                                <div class="form-group">
                                    <div id="editor">
                                        <textarea id='edit' class="edit" name="text" cols="3" style="width: 100%; overflow-y: scroll;">
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1">
                                <div class="form-group">
                                    <button class="btn btn-primary float-right mb-4"><i class="fas fa-location-arrow"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-footer-->
            </div>
            
        </main>
        <!-- final contenedor -->
        
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
    <script type="text/javascript" src="plugins/frolaJS/froala_editor.min.js"></script>
    <script type="text/javascript" src="plugins/frolaJS/align.min.js"></script>
    <script type="text/javascript" src="plugins/frolaJS/code_beautifier.min.js"></script>
    <script type="text/javascript" src="plugins/frolaJS/code_view.min.js"></script>
    <script type="text/javascript" src="plugins/frolaJS/colors.min.js"></script>
    <script type="text/javascript" src="plugins/frolaJS/emoticons.min.js"></script>
    <script type="text/javascript" src="plugins/frolaJS/draggable.min.js"></script>
    <script type="text/javascript" src="plugins/frolaJS/font_size.min.js"></script>
    <script type="text/javascript" src="plugins/frolaJS/font_family.min.js"></script>
    <script type="text/javascript" src="plugins/frolaJS/image.min.js"></script>
    <script type="text/javascript" src="plugins/frolaJS/image_manager.min.js"></script>
    <script type="text/javascript" src="plugins/frolaJS/line_breaker.min.js"></script>
    <script type="text/javascript" src="plugins/frolaJS/quick_insert.min.js"></script>
    <script type="text/javascript" src="plugins/frolaJS/link.min.js"></script>
    <script type="text/javascript" src="plugins/frolaJS/lists.min.js"></script>
    <script type="text/javascript" src="plugins/frolaJS/paragraph_format.min.js"></script>
    <script type="text/javascript" src="plugins/frolaJS/paragraph_style.min.js"></script>
    <script type="text/javascript" src="plugins/frolaJS/video.min.js"></script>
    <script type="text/javascript" src="plugins/frolaJS/table.min.js"></script>
    <script type="text/javascript" src="plugins/frolaJS/url.min.js"></script>
    <script type="text/javascript" src="plugins/frolaJS/file.min.js"></script>
    <script type="text/javascript" src="plugins/frolaJS/entities.min.js"></script>
    <script type="text/javascript" src="plugins/frolaJS/inline_style.min.js"></script>
    <script type="text/javascript" src="plugins/frolaJS/save.min.js"></script>
    <script type="text/javascript" src="plugins/frolaJS/fullscreen.min.js"></script>
    <script>
        (function () {
        new FroalaEditor("#edit", {
            toolbarInline: true,
            toolbarButtons: [ 
                ['bold', 'italic', 'underline', 'strikeThrough', 'textColor', 'backgroundColor', 'emoticons'], 
                ['paragraphFormat', 'align', 'formatOL', 'formatUL', 'indent', 'outdent'], 
                ['insertImage', 'insertLink', 'insertFile', 'insertVideo', 'undo', 'redo'] ],
            toolbarButtonsXS: null,
            toolbarButtonsSM: null,
            toolbarButtonsMD: null
        })
        })()
    </script>
