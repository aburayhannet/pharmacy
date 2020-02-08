 <div class="right-side">
                    <div class="text-title">
                        <h6>Search</h6>
                    </div>
                    <div class="search-box">
                        <form method="GET" action="<?php bloginfo('home'); ?>">
                            <input type="search" name="s" placeholder=" Search post" required="">
                        </form>
                    </div>
                    <div class="categorise-menu">
						<?php dynamic_sidebar('rightsidebar'); ?> 
                    </div>
                </div>
            </div>