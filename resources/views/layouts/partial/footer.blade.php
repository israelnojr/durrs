<!-- start footer Area -->		
<footer class="footer-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>About Us</h6>
                    <p>
                    DurrsConstructions concentrates on the most complex and profound 
                    challenges facing the world in the process, industrial, commercial and residential markets. 
                    </p>
                    <p class="footer-text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> DurrsConstructions All rights reserved 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>								
                </div>
            </div>
            <div class="col-lg-5  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Newsletter</h6>
                    <p>Stay update with our latest</p>
                    <div class="" >
                        <form action="{{route('email.create')}}" method="post" class="form-inline">
                            @csrf()
                            <input class="form-control" name="email" placeholder="Enter Email" type="email">
                            <button class="click-btn btn btn-default">
                                <i class="fa fa-long-arrow-right"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>						
            <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                <div class="single-footer-widget">
                    <h6>Follow Us</h6>
                    <p>Let us be social</p>
                    <div class="footer-social d-flex align-items-center">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                </div>
            </div>							
        </div>
    </div>
</footer>	
<!-- End footer Area -->