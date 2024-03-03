@extends('user.layouts.master')
@section('content')
    <div class="contact">
        <div class="container">
            <div class="contact_start">
                <div class="contact_left">
                    <form method="post" action="{{ route('user_contact_post') }}">
                        @csrf
                        <label for="name">F.I.O:</label>
                        <input class="contact_input" type="text" id="name" name="fullname" placeholder="F.I.0" required>

                        <label for="number">Telefon:</label>
                        <input placeholder="Telefon raqamingizni kiriting" class="contact_input" type="number" id="number" name="phone" required>

                        <label for="message">Xabar:</label>
                        <textarea placeholder="Xabar yuborish" id="message" name="message" rows="4" required></textarea>

                        <button type="submit">Yuborish</button>
                    </form>
                </div>

                <div class="contact_right">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11988.012266424777!2d69.1876097!3d41.3087969!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8960a12d0061%3A0x4eac03c9ca906153!2z0KPQt9Cx0LXQutGB0LrQuNC5INCz0L7RgdGD0LTQsNGA0YHRgtCy0LXQvdC90YvQuSDRg9C90LjQstC10YDRgdC40YLQtdGCINC80LjRgNC-0LLRi9GFINGP0LfRi9C60L7Qsg!5e0!3m2!1sru!2s!4v1708352545569!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <span>Address:Toshkent shahri, Kichik Xalqa Yo'li ko'chasi, 21-a uy</span>
                </div>
            </div>
        </div>
    </div>
@endsection
