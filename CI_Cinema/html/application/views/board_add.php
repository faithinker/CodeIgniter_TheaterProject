

<body>
    <div class="wrapper">

        <br><br>
        <!-- Main content -->
        <section class="container">
            <h2 class="page-heading heading--outcontainer">우리동네 영화관 글쓰기</h2>
        </section>

        <div class="contact-form-wrapper">
            <div class="container">
                <div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                    <form id="contact-form" class="form row" method="post" novalidate="" action="">
                        
                        <div class="col-sm-12 mega-select-present">
                            <div class="mega-select">
                            
							<select name="city">
                            <?php
                            foreach($list2 as $row) { //도시    
                                echo "<option value='$row->no'>$row->name</option> ";
                            }
                            ?> 
                            </select>
                            </div>
                           <br>
                        <div class="col-sm-12">
                            <input type="text" placeholder="이벤트명" name="title" class="form__name" value="<?=set_value("title"); ?>">
							<? if (form_error("title")==true) echo form_error("title"); ?>
                        </div>
                        <div class="col-sm-12">
                            <input type="text" placeholder="기간" name="term" class="form__name" value="">
                        </div>
                        <div class="col-sm-12">
                            <textarea placeholder="이벤트 내용 입력" name="contents" class="form__message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-md btn--danger">send message</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

 
    </div>

    <!-- open/close -->
        <div class="overlay overlay-hugeinc">
            
            <section class="container">


	</div>

            </section>
        </div>
	<!-- JavaScript-->
        <!-- jQuery 3.1.1--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/~team2/js/external/jquery-3.1.1.min.js"><\/script>')</script>
        <!-- Migrate --> 
        <script src="/~team2/js/external/jquery-migrate-1.2.1.min.js"></script>
        <!-- Bootstrap 3--> 
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

        <!-- Magnific-popup -->
        <script src="/~team2/js/external/jquery.magnific-popup.min.js"></script>

        <!-- Mobile menu -->
        <script src="/~team2/js/jquery.mobile.menu.js"></script>
         <!-- Select -->
        <script src="/~team2/js/external/jquery.selectbox-0.2.min.js"></script>

        <!-- Form element -->
        <script src="/~team2/js/external/form-element.js"></script>

        <!-- Custom -->
        <script src="/~team2/js/custom.js"></script>
		
		<script type="text/javascript">
            $(document).ready(function() {
                init_Gallery();
            });
		</script>

</body>
</html>
