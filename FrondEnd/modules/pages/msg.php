        <main class="page-content">
            <div class="card direct-chat direct-chat-primary p-0 m-0">
                <div class="card-header m-0 p-0 row">
                    <div class="input-group input-group-sm">
                        <img class="direct-chat-img img-responsive border border-white rounded-circle m-2"
                            style="width: 4rem;height: 4rem;"
                            src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
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
                        <div class="input-group-prepend">
                            <div class="card-tools m-3">
                                <span data-toggle="tooltip" title="3 New Messages" class="badge badge-primary "
                                    style="font-size:1rem;">3</span>
                                <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts"
                                    data-widget="chat-pane-toggle">
                                    <i class="fas fa-comments" style="font-size:2rem;"></i>
                                </button>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body m-0 p-0">
                    <!-- Conversations are loaded here -->
                    <div class="direct-chat-messages" style="height:71vh;">
                        <?php for ($i=0; $i <10 ; $i++):?>
                        <div class="direct-chat-msg">
                            <div class="dropright">
                                <img class="direct-chat-img" src="img/user1-128x128.jpg" alt="message user image"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <span class="direct-chat-timestamp m-2">23 Jan 2:00 pm</span>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="">Eliminar</a>
                                    <a class="dropdown-item" href="perfile">ver perfil</a>
                                </div>
                            </div>
                            <div class="direct-chat-text float-left font-weight-bolder m-2 p-3 text-break"
                                style="width: 55%;">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore, accusantium nesciunt
                                sequi voluptatibus quis modi qui quos labore distinctio eaque!
                            </div>
                        </div>

                        <div class="direct-chat-msg right">
                           
                            <div class="dropleft">
                                <img class="direct-chat-img" src="img/user3-128x128.jpg" alt="message user image"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <span class="direct-chat-timestamp m-2">23 Jan 2:00 pm</span>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="">Eliminar</a>
                                </div>
                            </div>
                            <div class="direct-chat-text float-right font-weight-bolder m-2 p-3 text-break"
                                style="width: 55%;">
                                You better believe it! Lorem ipsum dolor sit amet. Lorem ipsum, dolor sit amet
                                consectetur adipisicing elit. In, temporibus?
                            </div>

                        </div>
                        <?php endfor; ?>

                    </div>
                    <!--/.direct-chat-messages-->

                    <div class="direct-chat-contacts" style="height: auto;">
                        <ul class="contacts-list">
                            <?php for($i = 0; $i < 10 ; $i++):?>
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
                                    </a>
                                </li>
                            <?php endfor;?>
                        </ul>
                    </div>

                </div>
            </div>
            <footer class="main-footer" style="margin-left: 0rem!important">
                <form class="needs-validation-msg" novalidate>
                    <div class="input-group input-group-sm">
                        <div class="input-group-prepend d-block" id="plus">
                            <button class="btn btn-outline-light text-primary" id="extender" style="font-size: 2rem;"><i class="fas fa-plus"></i></button>
                        </div>
                        <div class="input-group-prepend d-none" id="less">
                            <button class="btn btn-outline-light text-primary" id="extraer" style="font-size: 2rem;"><i class="fas fa-angle-left"></i></button>
                        </div>
                        <textarea type="text" name="mensaje" id="mensaje" class="form-control fix-rounded-right ml-2 mr-2" style="overflow-y:scroll; height: 3rem; border-radius: 2rem;" placeholder="  Aa..." required></textarea>
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-light text-primary" style="font-size: 2rem;"><i class="fas fa-location-arrow"></i></button>
                        </div>
                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
                    </div>
                </form>
            </footer>
        </main>