<!-- footer-1 -->
<footer class="footer-10">
  <div class="container">
    <div class="row">
        <nav class="col-sm-9">
            <div class="col-sm-3">
                <div>
                    <a class="brand" href="/"><img src="/img/mr_switch_logo.png" alt="Mr. Switch" height="100" width="100"></a>
                    <h6>Mr. Switch</h6>
                </div>
            </div>
            <div class="col-sm-3">
                <h6>PRODUCT</h6>
                <ul>
                    <li>
                        <a href="/#pricing">Pricing</a>
                    </li>
                    <li>
                        <a href="/#features">Features</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h6>COMPANY</h6>
                <ul>
                    <li>
                        <a href="/about">About us</a>
                    </li>
                    <li>
                        <a href="/careers">Careers</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h6>HELP</h6>
                <ul>
                    <li>
                        <a href="/contact">Contact</a>
                    </li>
                    <li>
                        <a href="/refunds">Refunds</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="col-sm-3" id="subscribe-box">
            <h6>Subscribe</h6>
            {!! Form::open(array('route' => 'subscribe', 'class' => 'subscribe-form', 'id' => 'subscribe-form')) !!}
                <div class="input-group">
                    <input type="email" class="form-control" placeholder="Email here..." name="email" id="email-input">
                    <span class="input-group-btn">
                        <button class="btn" type="submit" id="subscribe-btn">
                            <span class="fui-arrow-right"> </span>
                        </button>
                    </span>
                </div>
                <small class="alert message">&nbsp;</small>
            {!! Form::close() !!}
        </div>
    </div>
    <div class="row copy-terms">
        <div class="terms">
            <small>Our  
                <a href="/terms">Terms of Service</a> and 
                <a href="/privacy">Privacy Policy</a>.
            </small>
        </div>
        <div class="copyright">
            &COPY; Copyright {{date('Y')}} JE Infratech Services (P) Ltd.
        </div>
    </div>
  </div>
</footer>