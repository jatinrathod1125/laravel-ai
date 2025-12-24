
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Manage Subscription
</button>

<div class="modal fade" id="exampleModal" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <div class="pricing-plane-area pb--50">
                    <div class="container">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="title-conter-area">
                                    <h2 class="title">Manage Subscription</h2>
                                    <span class="pre-title-bg">
                                        Want to get more out of Imagine AI? Subscribe to one of our professional plans.
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- TABS -->
                        <div class="tab-area-pricing-two mt--30">
                            <ul class="nav nav-tabs pricing-button-one two">
                                <li class="nav-item">
                                    <button class="active" data-bs-toggle="tab" data-bs-target="#monthly">
                                        Monthly Pricing
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button data-bs-toggle="tab" data-bs-target="#yearly">
                                        Annual Pricing
                                    </button>
                                </li>
                                <li class="save-badge"><span>SAVE 25%</span></li>
                            </ul>

                            <div class="tab-content mt--20">

                                <!-- ================= MONTHLY ================= -->
                                <div class="tab-pane fade show active" id="monthly">
                                    <div class="row g-5 mt--10">

                                        @foreach($plans as $plan)
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="single-pricing-single-two
                                                {{ auth()->check() && optional(auth()->user()->plan)->id == $plan->id ? 'active' : '' }}">

                                                <div class="head">
                                                    <span class="top">{{ $plan->name }}</span>
                                                    <div class="date-use">
                                                        <h4 class="title">
                                                            {{ $plan->price_monthly == 0 ? 'Free' : '$'.$plan->price_monthly }}
                                                        </h4>
                                                        <span>/Month</span>
                                                    </div>
                                                </div>

                                                <div class="body">
                                                    <p class="para">
                                                        {{ $plan->feature('description') }}
                                                    </p>

                                                    <div class="check-wrapper">
                                                        <div class="check-area">
                                                            <i class="fa-solid fa-check"></i>
                                                            <p>{{ $plan->feature('yearly_word_limit_text') }}</p>
                                                        </div>
                                                        <div class="check-area">
                                                            <i class="fa-solid fa-check"></i>
                                                            <p>{{ $plan->feature('templates_text') }}</p>
                                                        </div>
                                                        <div class="check-area">
                                                            <i class="fa-solid fa-check"></i>
                                                            <p>{{ $plan->feature('content_type_text') }}</p>
                                                        </div>
                                                        <div class="check-area">
                                                            <i class="fa-solid fa-check"></i>
                                                            <p>{{ $plan->feature('languages_text') }}</p>
                                                        </div>
                                                    </div>

                                                    <a href="#"
                                                       class="pricing-btn">
                                                        {{ auth()->check() && optional(auth()->user()->plan)->id == $plan->id
                                                            ? 'Current Plan'
                                                            : 'Get Started' }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>

                                <!-- ================= YEARLY ================= -->
                                <div class="tab-pane fade" id="yearly">
                                    <div class="row g-5 mt--10">

                                        @foreach($plans as $plan)
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="single-pricing-single-two
                                                {{ auth()->check() && optional(auth()->user()->plan)->id == $plan->id ? 'active' : '' }}">

                                                <div class="head">
                                                    <span class="top">{{ $plan->name }}</span>
                                                    <div class="date-use">
                                                        <h4 class="title">
                                                            {{ $plan->price_yearly == 0 ? 'Free' : '$'.$plan->price_yearly }}
                                                        </h4>
                                                        <span>/Year</span>
                                                    </div>
                                                </div>

                                                <div class="body">
                                                    <p class="para">
                                                        {{ $plan->feature('description') }}
                                                    </p>

                                                    <div class="check-wrapper">
                                                        <div class="check-area">
                                                            <i class="fa-solid fa-check"></i>
                                                            <p>{{ $plan->feature('yearly_word_limit_text') }}</p>
                                                        </div>
                                                        <div class="check-area">
                                                            <i class="fa-solid fa-check"></i>
                                                            <p>{{ $plan->feature('templates_text') }}</p>
                                                        </div>
                                                        <div class="check-area">
                                                            <i class="fa-solid fa-check"></i>
                                                            <p>{{ $plan->feature('content_type_text') }}</p>
                                                        </div>
                                                        <div class="check-area">
                                                            <i class="fa-solid fa-check"></i>
                                                            <p>{{ $plan->feature('languages_text') }}</p>
                                                        </div>
                                                    </div>

                                                    <a href="#"
                                                       class="pricing-btn">
                                                        {{ auth()->check() && optional(auth()->user()->plan)->id == $plan->id
                                                            ? 'Current Plan'
                                                            : 'Get Started' }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- tabs end -->

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
