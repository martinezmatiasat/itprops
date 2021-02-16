<?php 
   
   require_once(INCLUDES."header.php");
?>

<div class="main-content">
<div class="content-overlay"></div>
<div class="content-wrapper">
    <div class="row">
        <div class="col-12">
            <div class="content-header">Toastr</div>
            <p class="content-sub-header mb-1">By default, the toastr will show up at top right corner of the page view, and will automatically dismiss in 3 seconds. You can configure the toasts using ToastOptions class.</p>
        </div>
    </div>

    <!-- Types section start -->
    <section id="toastr-types">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Types</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <button type="button" class="btn btn-outline-success mb-1 mr-1" id="type-success">Success</button>
                            <button type="button" class="btn btn-outline-danger mb-1 mr-1" id="type-error">Error</button>
                            <button type="button" class="btn btn-outline-info mb-1 mr-1" id="type-info">Info</button>
                            <button type="button" class="btn btn-outline-warning mb-1" id="type-warning">Warning</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Types section end -->

    <!-- Position section start -->
    <section id="toastr-position">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Positions</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 mb-2">
                                    <h6>Top Positions</h6>
                                    <button type="button" class="btn btn-outline-primary btn-toastr mb-1 mr-1" id="position-top-left">Top Left</button>
                                    <button type="button" class="btn btn-outline-primary btn-toastr mb-1 mr-1" id="position-top-center">Top Center</button>
                                    <button type="button" class="btn btn-outline-primary btn-toastr mb-1 mr-1" id="position-top-right">Top Right</button>
                                    <button type="button" class="btn btn-outline-primary btn-toastr mb-1" id="position-top-full">Top Full Width</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h6>Bottom Positions</h6>
                                    <button type="button" class="btn btn-outline-primary btn-toastr mb-1 mr-1" id="position-bottom-left">Bottom Left</button>
                                    <button type="button" class="btn btn-outline-primary btn-toastr mb-1 mr-1" id="position-bottom-center">Bottom Center</button>
                                    <button type="button" class="btn btn-outline-primary btn-toastr mb-1 mr-1" id="position-bottom-right">Bottom Right</button>
                                    <button type="button" class="btn btn-outline-primary btn-toastr mb-1" id="position-bottom-full">Bottom Full Width</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Position section end -->

    <!-- Options section start -->
    <section id="options">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Options</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <button type="button" class="btn btn-outline-primary mb-1 mr-1" id="text-notification">Notifications</button>
                            <button type="button" class="btn btn-outline-primary mb-1 mr-1" id="close-button">Close Button</button>
                            <button type="button" class="btn btn-outline-primary mb-1 mr-1" id="progress-bar">Progress Bar</button>
                            <button type="button" class="btn btn-outline-primary mb-1" id="clear-toast-btn">Clear Toast</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Options section end -->

    <!-- Clear toasts section start -->
    <section id="clear-toasts">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Clear Toasts</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-12 mb-2 mb-md-0">
                                    <h6>Remove</h6>
                                    <p>Immediately removes current toasts without using animation.</p>
                                    <button type="button" class="btn btn-outline-primary mb-1 mr-1" id="show-remove-toast">Show Toast</button>
                                    <button type="button" class="btn btn-outline-danger mb-1 mr-1" id="remove-toast">Remove Toast</button>
                                </div>
                                <div class="col-md-6 col-12">
                                    <h6>Clear</h6>
                                    <p>Remove current toasts using animation.</p>
                                    <button type="button" class="btn btn-outline-primary mb-1 mr-1" id="show-clear-toast">Show Toast</button>
                                    <button type="button" class="btn btn-outline-danger mb-1" id="clear-toast">Clear Toast</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Clear toasts section end -->

    <!-- Duration & Timeout section start -->
    <section id="duration-timeout">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Duration & Timeout</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>You can use options like <code>showDuration</code>, <code>hideDuration</code>, <code>timeout</code> for your toasts. To create a sticky toast, set the <code>timeout</code> to <code>0</code>.</p>
                            <button type="button" class="btn btn-outline-primary mb-1 mr-1" id="fast-duration">Show .5s</button>
                            <button type="button" class="btn btn-outline-primary mb-1 mr-1" id="slow-duration">Hide 3s</button>
                            <button type="button" class="btn btn-outline-primary mb-1 mr-1" id="timeout">Timeout 5s</button>
                            <button type="button" class="btn btn-outline-primary mb-1" id="sticky">Sticky Toast</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Duration & Timeout section end -->

    <!-- Animation section start -->
    <section id="animation">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Show / Hide Animation</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>Use the jQuery <code>show/hide</code> method of your choice. These default to <code>fadeIn/fadeOut</code>. The methods <code>fadeIn/fadeOut</code>, <code>slideDown/slideUp</code>, and <code>show/hide</code> are built into jQuery.</p>
                            <button type="button" class="btn btn-outline-primary mb-1 mr-1" id="slide-toast">slideDown - slideUp</button>
                            <button type="button" class="btn btn-outline-primary mb-1" id="fade-toast">fadeIn - fadeOut</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Animation section end -->
</div>
</div>

<?php
require_once(INCLUDES."footer.php");
?>