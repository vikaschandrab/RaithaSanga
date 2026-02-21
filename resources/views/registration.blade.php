@extends('layouts.app')

@section('title', 'ನೊಂದಣಿ ದಾಖಲೆ | Registration Document')
@section('top_bar_kn', 'ಕೃಷಿ ರಾಜ್ಯ ರೈತ ಸಂಘ - ನೊಂದಣಿ ದಾಖಲೆ')
@section('top_bar_en', 'Krushi Rajya Raitha Sangha - Registration Document')
@section('main_id', 'registration-pdf')

@section('hero')
    <article class="card">
        <span class="pill" data-kn="ಕನ್ನಡ - ಡೀಫಾಲ್ಟ್" data-en="English - Active">ಕನ್ನಡ - ಡೀಫಾಲ್ಟ್</span>
        <h1 data-kn="ನೊಂದಣಿ ಪ್ರತಿಯ ವಿವರ" data-en="Registration Copy Details">ನೊಂದಣಿ ಪ್ರತಿಯ ವಿವರ</h1>
        <p data-kn="ಈ ಪುಟದಲ್ಲಿ ಕೃಷಿ ರಾಜ್ಯ ರೈತ ಸಂಘದ ನೊಂದಣಿ ಪ್ರತಿಯ ಮೂಲ ಪಿಡಿಎಫ್ ದಾಖಲೆ ನೀಡಲಾಗಿದೆ. ಕೆಳಗಿನ ವೀಕ್ಷಕದಲ್ಲಿ ದಸ್ತಾವೇಜನ್ನು ನೇರವಾಗಿ ಓದಬಹುದು."
            data-en="This page provides the official PDF copy of Krushi Rajya Raitha Sangha registration. You can view the document directly in the viewer below.">
            ಈ ಪುಟದಲ್ಲಿ ಕೃಷಿ ರಾಜ್ಯ ರೈತ ಸಂಘದ ನೊಂದಣಿ ಪ್ರತಿಯ ಮೂಲ ಪಿಡಿಎಫ್ ದಾಖಲೆ ನೀಡಲಾಗಿದೆ. ಕೆಳಗಿನ ವೀಕ್ಷಕದಲ್ಲಿ ದಸ್ತಾವೇಜನ್ನು ನೇರವಾಗಿ ಓದಬಹುದು.
        </p>
        <a class="cta" href="#registration-pdf" data-kn="ದಾಖಲೆ ವೀಕ್ಷಿಸಿ" data-en="View Document">ದಾಖಲೆ ವೀಕ್ಷಿಸಿ</a>
    </article>
@endsection

@section('content')
    <section>
        <h2 class="section-title" data-kn="ನೊಂದಣಿ ಪಿಡಿಎಫ್ ದಾಖಲೆ" data-en="Registration PDF Document">ನೊಂದಣಿ ಪಿಡಿಎಫ್ ದಾಖಲೆ</h2>
        <article class="card" style="padding: 0; overflow: hidden;">
            <object
                data="{{ asset('documents/registration.pdf') }}#toolbar=0&navpanes=0&scrollbar=1"
                type="application/pdf"
                width="100%"
                height="900">
                <iframe
                    src="{{ asset('documents/registration.pdf') }}#toolbar=0&navpanes=0&scrollbar=1"
                    title="Registration PDF"
                    width="100%"
                    height="900"
                    style="border: 0;">
                </iframe>
            </object>
        </article>

        <p style="margin-top: 1rem;">
            <span data-kn="ಪಿಡಿಎಫ್ ತೆರೆದುಕೊಳ್ಳದಿದ್ದರೆ, ಇಲ್ಲಿ ಕ್ಲಿಕ್ ಮಾಡಿ: "
                data-en="If the PDF does not load, click here: ">
                ಪಿಡಿಎಫ್ ತೆರೆದುಕೊಳ್ಳದಿದ್ದರೆ, ಇಲ್ಲಿ ಕ್ಲಿಕ್ ಮಾಡಿ:
            </span>
            <a href="{{ asset('documents/registration.pdf') }}" target="_blank" rel="noopener"
                data-kn="ನೊಂದಣಿ ಪ್ರತಿಯನ್ನು ತೆರೆಯಿರಿ"
                data-en="Open Registration Copy">ನೊಂದಣಿ ಪ್ರತಿಯನ್ನು ತೆರೆಯಿರಿ</a>
        </p>
    </section>
@endsection
