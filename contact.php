<?php include 'includes/meta.php' ?>

<?php include 'includes/header.php' ?>

<?php include 'includes/slider.php' ?>

<main>

    <section class="section background-4">
        <div class="r-container">
            <div class="row row-cols-1 row-cols-lg-2">
                <div class="col mb-3">
                    <div class="d-flex flex-column gap-3">
                        <h5 class="accent-color font-1 fw-semibold">CONTACT US</h5>
                        <h3 class="font-2 fw-semibold outline-text">HAVE A QUESTION ?</h3>
                        <div class="d-flex flex-lg-row flex-column gap-4">
                            <div class="d-flex flex-row gap-3 align-items-center">
                                <i class="fa-solid fa-phone accent-color fs-4"></i>
                                <span class="text-gray fs-5">+234 805 945 5352, +234 811 364 4454, +234 915 570 8984</span>
                            </div>
                            <div class="d-flex flex-row gap-3 align-items-center">
                                <i class="fa-solid fa-envelope accent-color fs-4"></i>
                                <span class="text-gray fs-5">info@oundevelopers.com, admin@oundevelopers.com</span>
                            </div>
                        </div>
                        <p class="text-gray font-2">
                        For inquiries or to learn more about our services, please reach out to us using any of the contact details provided above. We are here to help!:
                        </p>
                        <!-- <iframe loading="lazy" class="maps shadow shadow-lg"
                            src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=near"
                            title="London Eye, London, United Kingdom"
                            aria-label="London Eye, London, United Kingdom"></iframe> -->
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="h-100 d-flex flex-column p-lg-5">
                        <div class="success_msg toast align-items-center w-100 shadow-none mb-3 bg-transparent border border-success rounded-0 my-4"
                            role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="d-flex p-2">
                                <div class="toast-body f-18 d-flex flex-row gap-3 align-items-center text-success">
                                    <i class="fa-solid fa-check f-36 text-success"></i>
                                    Your Message Successfully Send.
                                </div>
                                <button type="button"
                                    class="me-2 m-auto bg-transparent border-0 ps-1 pe-0 text-success"
                                    data-bs-dismiss="toast" aria-label="Close"><i
                                        class="fa-solid fa-xmark"></i></button>
                            </div>
                        </div>
                        <div class="error_msg toast align-items-center w-100 shadow-none border-danger mb-3 bg-transparent my-4 border rounded-0"
                            role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="d-flex p-2">
                                <div class="toast-body f-18 d-flex flex-row gap-3 align-items-center text-danger">
                                    <i class="fa-solid fa-triangle-exclamation f-36 text-danger"></i>
                                    Something Wrong ! Send Form Failed.
                                </div>
                                <button type="button"
                                    class="me-2 m-auto bg-transparent border-0 ps-1 pe-0 text-danger"
                                    data-bs-dismiss="toast" aria-label="Close"><i
                                        class="fa-solid fa-xmark"></i></button>
                            </div>
                        </div>
                        <form action="#"
                            class="d-flex flex-column h-100 justify-content-center w-100 needs-validation mb-3 form px-lg-5"
                            novalidate>
                            <div class="mb-3">
                                <input type="text" class="form-control py-2 px-4" name="name" id="name"
                                    placeholder="Name" required>
                                <div class="invalid-feedback">
                                    The field is required.
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control py-2 px-4" name="email" id="email"
                                    placeholder="Email" required>
                                <div class="invalid-feedback">
                                    The field is required.
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control py-2 px-4" name="subject" id="subject"
                                    placeholder="Subject" required>
                                <div class="invalid-feedback">
                                    The field is required.
                                </div>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control py-2 px-4" id="message" name="message" rows="5"
                                    placeholder="Message"></textarea>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn rounded-0 submit_form font-1 py-3">
                                    SUBMIT
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php' ?>

<?php include 'includes/scripts.php' ?>