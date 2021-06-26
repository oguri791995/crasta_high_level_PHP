<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="../../CSS/contact.css">
</head>
<body>
    <header>
        <div class="header-inner" id="header-inner" v-bind:class="{'noScroll': isActive}">
            <div class="header-line">
                <div class="header-title">
                    <img src="../../images/site-logo.svg" alt="">
                </div>
                <div class="header-humberger" ></div>
                    <div class="humberger" v-on:click="change">
                        <ul class="humberger-ul">
                        <li class="bar top-bar" v-bind:class="{'top-bar-click': isActive}"></li>
                            <li class="bar middle-bar" v-bind:class="{'middle-bar-click': isActive}"></li>
                            <li class="bar bottom-bar" v-bind:class="{'bottom-bar-click': isActive}"></li>
                        </ul>
                        <div class="humberger-title" id="humberger-title" >MENU</div>
                    </div>
                </div>
                <nav>
                    <div class="header-nav" v-if="isActive == true">
                        <div class="nav-inner">
                            <div class="nav-img">
                                <img src="../../images/simbol-logo.svg" alt="">
                            </div>
                            <div class="humberger-ul">
                                <ul>
                                    <li class="nav-item opacity">
                                        <a href="/#about">ABOUT US</a>
                                    </li>
                                    <li class="nav-item opacity">
                                        <a href="/#works">WORKS</a>
                                    </li>
                                    <li class="nav-item opacity">
                                        <a href="/#culture">CULTURE</a>
                                    </li>
                                    <li class="nav-item opacity">
                                        <a href="/#topics">TOPICS</a>
                                    </li>
                                    <li class="nav-item opacity">
                                        <a href="/#contact">CONTACT</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="humberger-background"></div>
                    </div>
                </nav>
            </div>

                <div class="header-img">
                    <img src="../../images/heading-img_contact.jpg" alt="">
                </div>
                <div class="header-background"></div>
        </div>
        
    </header>
    <main>
        <div class="first-view">
            <div class="fv-inner">
                <div class="fv-title" id="fv-title" v-on:click="console.log('vue');">CONTACT</div>
                <div class="fv-text">お問い合わせ</div>
            </div>
        </div>
        <section>
            <div class="contact">
                <div class="contact-inner">
                    <div class="contact-load">ご依頼やご相談についてのご質問やご要望がございましたら、下記フォームよりお気軽にお問い合わせください。送付いただいた内容を確認の上、担当者からご連絡させていただきます。</div>
                    <form action="../../../DBinsert.php" method="POST">

                        <div class="contact-type">
                            <div class="contact-type-title required">お問い合わせ種別</div>
                            <label for="production-request" class="radio" ><input type="radio" value="production-request" name="contact-radio" id="production-request" checked>制作依頼</label><br class="displayNone-pc">
                            <label for="recruitment" class="radio"><input type="radio" value="recruitment" name="contact-radio" id="recruitment">採用</label><br class="displayNone-pc">
                            <label for="IR" class="radio"><input type="radio" value="IR" name="contact-radio" id="IR">IR</label><br class="displayNone-pc">
                            <label for="another" class="radio"><input type="radio" value="another" name="contact-radio" id="another">その他</label><br class="displayNone-pc">
                        </div>
                        <div class="company-name contact-item">
                            <label for="">会社名・団体名</label><br>
                            <input type="text" name="company">
                        </div>
                        <div class="name contact-item">
                            <label for="" class="required">お名前</label><br>
                            <input type="text" name="name" required>
                        </div>
                        <div class="e-mail contact-item">
                            <label for="" class="required">メールアドレス</label><br>
                            <input type="text" name="email" required pattern="[\w\-\.]*@[\w\-\.]*\.[\w\-\.]*">
                        </div>
                        <div class="tel contact-item">
                            <label for="">電話番号</label><br>
                            <input type="text" name="tel" pattern="0[0-9]{1,4}[0-9]{1,4}[0-9]{4}" placeholder="「-」は含めないで入力。　例) 09012341234">
                        </div>
                        <div class="contact-contents contact-item">
                            <label for="" class="required">お問い合わせ内容</label><br>
                            <textarea name="contact-msg" id="" cols="30" rows="10" maxlength="300" placeholder="300文字以内で入力してください" required></textarea>
                        </div>
                        <div class="policy contact-item">
                            <label for="">PRIVACY POLICY</label><br>
                            <textarea readonly name="" id="" cols="30" rows="10">
個人情報保護方針
株式会社DIGSMILE（以下、当社）では、個人情報の重要性を認識し、以下の基準に従って、適切な管理、保護に努めます。

1.個人情報の収集、利用
当社では、お客様との取引、サービスの提供のために個人情報を適法に収集し、収集した目的の範囲内で、個人情報を利用いたします。

2.個人情報の第三者への開示と提供
収集したお客様の個人情報は、法的な要請等によらない限り、お客様の承諾を得ない第三者に対して提供・開示はいたしません。
業務の都合上、業務委託先に個人情報を提供する場合は、機密保持契約等によって業務委託先に個人情報保護を義務付けるとともに、業務委託先が適切に個人情報を取り扱うように管理いたします。

3.個人情報の保護
当社では、個人情報の紛失、破壊、改ざん、不正アクセス、および漏えい等を防止するため、適切な対策を行います。

4.法令および関連規範の遵守
当社は、個人情報の取り扱いに関して、個人情報保護法をはじめとする個人情報に関する法令および関連する規範を遵守します。

5.個人情報の開示・訂正・削除
当社では、個人情報の開示・訂正・削除等の依頼があった場合、情報提供者本人であることを確認の上、すみやかに対応いたします。

法令や当社方針により、プライバシー・ポリシーを予告なく改訂することがあります。

お問い合わせ窓口
当社の個人情報の取扱いに関するお問い合わせは下記までご連絡お願いいたします。
株式会社ファイアープレイス
044-589-4333


                            </textarea>
                        </div>
                        <div class="agree">
                            <label for="agree"><input type="checkbox" id="agree" name="agree" required>
                                <span>個人情報の取り扱いについて同意のうえ送信します。</span>
                            </label><br>
                        </div>
                        <div class="submit">
                            <input type="submit" name="送信">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="footer-text">&copy;2018 DIGSMILE INC.</div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
    <script src="../../JS/contact.js"></script>
</body>

</html>