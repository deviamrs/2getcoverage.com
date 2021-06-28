@extends('layouts.front')

@section('page_title')
{{ 'Faqs' }}
@endsection

@section('front_content')

<div id="faq-page">

    @includeIf('front.partials.breadcrumb', ['pagename' => "Faq's" , 'pagecontent' => 'Clear Your Doubt'])



    <div class="our">
        <div class="our--inner container-small">


            <div class="faq-cards-wrapper">


                <div class="faq-card">
                    <div class="question">
                        <div class="icons-wrap"> <span class="icon --plus">Q</span><span class="icon --minus">Q</span>
                        </div>
                        <h3 class="question-data">Does it cost anything to use 2GETCOVERAGE.COM?</h3>
                    </div>
                    <div class="answer-detail">
                        <div class="answer-wrap">
                            <div class="global-read-content">
                                <p>
                                    <strong>2GETCOVERAGE.COM</strong> is free to use. Just supply the requested
                                    information,
                                    compare the quotes, and choose your policy.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-card">
                    <div class="question">
                        <div class="icons-wrap"> <span class="icon --plus">Q</span><span class="icon --minus">Q</span>
                        </div>
                        <h3 class="question-data">What information is needed for auto insurance?</h3>
                    </div>
                    <div class="answer-detail">
                        <div class="answer-wrap">
                            <div class="global-read-content">
                                <p>You will need the Vehicle Identification Number (VIN); year, make, and model;
                                    mileage, and lien information (if any).
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-card">
                    <div class="question">
                        <div class="icons-wrap"> <span class="icon --plus">Q</span><span class="icon --minus">Q</span>
                        </div>
                        <h3 class="question-data">Can I bundle auto and home insurance together?</h3>
                    </div>
                    <div class="answer-detail">
                        <div class="answer-wrap">
                            <div class="global-read-content">
                                <p>Most insurance companies offer multiple policies in bundles.</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-card">
                    <div class="question">
                        <div class="icons-wrap"> <span class="icon --plus">Q</span><span class="icon --minus">Q</span>
                        </div>
                        <h3 class="question-data">Will a credit check be required?</h3>
                    </div>
                    <div class="answer-detail">
                        <div class="answer-wrap">
                            <div class="global-read-content">
                                <p>Many insurance companies require a credit check with a soft hit and will not affect
                                    your
                                    credit score. Some states and some companies do not require a credit check.</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-card">
                    <div class="question">
                        <div class="icons-wrap"> <span class="icon --plus">Q</span><span class="icon --minus">Q</span>
                        </div>
                        <h3 class="question-data">Will I have a designated licensed insurance agent for my policy?
                        </h3>
                    </div>
                    <div class="answer-detail">
                        <div class="answer-wrap">
                            <div class="global-read-content">
                                <p>A licensed insurance agent is designated to every customer and policy. Questions and
                                    changes to policy can be done at any time the insured has a need to.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-card">
                    <div class="question">
                        <div class="icons-wrap"> <span class="icon --plus">Q</span><span class="icon --minus">Q</span>
                        </div>
                        <h3 class="question-data">What do I do if I have a claim?</h3>
                    </div>
                    <div class="answer-detail">
                        <div class="answer-wrap">
                            <div class="global-read-content">
                                <p>First, call the 800 number on your insurance ID card for claims. Your designated
                                    agent will be notified by the insurance company to work with you to resolve issues
                                    as soon as
                                    possible.</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-card">
                    <div class="question">
                        <div class="icons-wrap"> <span class="icon --plus">Q</span><span class="icon --minus">Q</span>
                        </div>
                        <h3 class="question-data">What do I do in case of an accident?
                        </h3>
                    </div>
                    <div class="answer-detail">
                        <div class="answer-wrap">
                            <div class="global-read-content">
                                <p>First, call the police and make an official report. Second, call the claims number on
                                    your ID card. Third, let the police report dictate if you are guilty or innocent of
                                    the
                                    incident.</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-card">
                    <div class="question">
                        <div class="icons-wrap"> <span class="icon --plus">Q</span><span class="icon --minus">Q</span>
                        </div>
                        <h3 class="question-data">Can the premiums for the policy be paid in installments?</h3>
                    </div>
                    <div class="answer-detail">
                        <div class="answer-wrap">
                            <div class="global-read-content">
                                <p>You can pay the full amount for the premium or pay the premium in installments. Most
                                    insurance companies have options for making installments.</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-card">
                    <div class="question">
                        <div class="icons-wrap"> <span class="icon --plus">Q</span><span class="icon --minus">Q</span>
                        </div>
                        <h3 class="question-data">How can I learn more about insurance coverage?</h3>
                    </div>
                    <div class="answer-detail">
                        <div class="answer-wrap">
                            <div class="global-read-content">
                                <p>
                                    Our goal is to inform you about coverage for many different needs. In our website
                                    you
                                    will find informative videos, blogs, and advice from experienced agents.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-card">
                    <div class="question">
                        <div class="icons-wrap"> <span class="icon --plus">Q</span><span class="icon --minus">Q</span>
                        </div>
                        <h3 class="question-data">Are there ways to reduce the cost of auto insurance?
                        </h3>
                    </div>
                    <div class="answer-detail">
                        <div class="answer-wrap">
                            <div class="global-read-content">
                                <p>Insurance companies provide discounts for certain actions such as a Defensive Driving
                                    class, good student discounts, safety devices on your vehicle, and being a
                                    homeowner.
                                    Insurance companies cannot change the rates that they have registered with the
                                    state, but
                                    not all companies have equal rates, and it is always free to compare prices.</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-card">
                    <div class="question">
                        <div class="icons-wrap"> <span class="icon --plus">Q</span><span class="icon --minus">Q</span>
                        </div>
                        <h3 class="question-data">Is cheap insurance always the best choice?
                        </h3>
                    </div>
                    <div class="answer-detail">
                        <div class="answer-wrap">
                            <div class="global-read-content">
                                <p>Not always, if the policy does not give you the coverage you need when an accident
                                    occurs. Minimum state requirements may not give you adequate coverage. </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-card">
                    <div class="question">
                        <div class="icons-wrap"> <span class="icon --plus">Q</span><span class="icon --minus">Q</span>
                        </div>
                        <h3 class="question-data">Why do I need Uninsured Motorist coverage?</h3>
                    </div>
                    <div class="answer-detail">
                        <div class="answer-wrap">
                            <div class="global-read-content">
                                <p>Uninsured Motorist coverage will pay for damages caused by another driver who is not
                                    insured or by a hit and run driver.</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-card">
                    <div class="question">
                        <div class="icons-wrap"> <span class="icon --plus">Q</span><span class="icon --minus">Q</span>
                        </div>
                        <h3 class="question-data">Why would I want Under Insured Motorist coverage?
                        </h3>
                    </div>
                    <div class="answer-detail">
                        <div class="answer-wrap">
                            <div class="global-read-content">
                                <p>Under Insured Motorist coverage will pay for damages that exceed the limit when your
                                    liability coverage is not enough to pay for damages to your vehicle.</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-card">
                    <div class="question">
                        <div class="icons-wrap"> <span class="icon --plus">Q</span><span class="icon --minus">Q</span>
                        </div>
                        <h3 class="question-data">Do you provide insurance for RVs, motorcycles, boats, personal items,
                            and travel?</h3>
                    </div>
                    <div class="answer-detail">
                        <div class="answer-wrap">
                            <div class="global-read-content">
                                <p>We can provide insurance for all these categories.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-card">
                    <div class="question">
                        <div class="icons-wrap"> <span class="icon --plus">Q</span><span class="icon --minus">Q</span>
                        </div>
                        <h3 class="question-data">Who owns 2GetCoverage.com?
                        </h3>
                    </div>
                    <div class="answer-detail">
                        <div class="answer-wrap">
                            <div class="global-read-content">
                                <p>2GetCoverage.com is owned by Coverage.com Agency LLC</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-card">
                    <div class="question">
                        <div class="icons-wrap"> <span class="icon --plus">Q</span><span class="icon --minus">Q</span>
                        </div>
                        <h3 class="question-data">Can I get a policy with a SR-22 Endorsement?</h3>
                    </div>
                    <div class="answer-detail">
                        <div class="answer-wrap">
                            <div class="global-read-content">
                                <p>Yes, we can provide an SR-22 Endorsement required by the state</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-small" style="margin-top: 5rem">
        @include('front.partials.startCompare')
    </div>

</div>
@endsection



@section('custom_JS')
<script>
    const faqWrpBoxes = document.querySelectorAll('#faq-page .faq-cards-wrapper')

    faqWrpBoxes.forEach((faqWrpBoxe, index) => {
        faqWrpBoxe.id = `faq-card-wrap-box-${index}`
    });

    faqWrpBoxes.forEach(faqWrpBoxe => {

        const boxID = faqWrpBoxe.getAttribute('id');

        const faqs = document.querySelectorAll(`#${boxID} .question`);

        faqs.forEach(faq => {

            faq.addEventListener('click', (e) => {

                if (e.target.classList.contains('icon') || e.target.classList.contains(
                        'question-data')) {
                    faq.parentElement.classList.toggle('active');
                }
            })
        });

    });

</script>
@endsection
