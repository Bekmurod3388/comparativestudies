@extends('user.layouts.master')
@section('content')
    <div class="contact">
        <div class="container">
            <div class="contact_start">
                <div class="contact_left">
                    <form>
                        <label for="name">Name:</label>
                        <input class="contact_input" type="text" id="name" name="name" placeholder="F.I.0" required>

                        <label for="number">Telefon:</label>
                        <input placeholder="Telefon raqamingizni kiriting" class="contact_input" type="email" id="number" name="number" required>

                        <label for="message">Xabar:</label>
                        <textarea placeholder="Xabar yuborish" id="message" name="message" rows="4" required></textarea>

                        <button type="submit">Yuborish</button>
                    </form>
                </div>

                <div class="contact_right">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m22!1m8!1m3!1d5031.915269539556!2d34.793992!3d50.906!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m5!1s0x4129018bc645d177%3A0x8413768c59979cc1!2sBAZA%20GYM!3m2!1d50.9064434!2d34.7933374!4m3!3m2!1d50.906!2d34.793991999999996!5e0!3m2!1sru!2s!4v1703352601258!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <span>Address:Toshkent shahri, Kichik Xalqa Yo'li ko'chasi, 21-a uy</span>
                </div>
            </div>
        </div>
    </div>
@endsection
