# Portfolio sayt — Cyber Abdulloh

Matrix uslubidagi shaxsiy portfolio sayt. Aloqa formasi orqali yuborilgan xabarlar Telegram botiga keladi.

## Fayllar

- `index.html` — saytning o'zi (dizayn, animatsiyalar)
- `contact.php` — aloqa formasidan kelgan xabarlarni Telegramga yuboruvchi backend

## 1. Telegram bot va chat ID olish

1. [@BotFather](https://t.me/BotFather) ga yozib, `/newbot` bilan yangi bot yarating — sizga **BOT_TOKEN** beriladi
2. Yangi botingizga o'zingiz `/start` deb yozing (botga birinchi xabarni siz yuborishingiz kerak)
3. Brauzerda quyidagi manzilni oching (TOKEN o'rniga o'z tokeningizni qo'ying):
   `https://api.telegram.org/botTOKEN/getUpdates`
4. Javobda `"chat":{"id": ...}` qismini toping — shu raqam sizning **TELEGRAM_CHAT_ID** ingiz

## 2. Lokal test (ixtiyoriy)

PHP o'rnatilgan bo'lishi kerak:

```bash
export BOT_TOKEN=your_token
export TELEGRAM_CHAT_ID=your_chat_id
php -S localhost:8080
```

Brauzerda `http://localhost:8080` ni oching.

## 3. GitHub'ga yuklash

```bash
git init
git add .
git commit -m "Portfolio sayt + Telegram aloqa formasi"
git branch -M main
git remote add origin https://github.com/USERNAME/REPO_NAME.git
git push -u origin main
```

## 4. Railway'ga deploy qilish

1. https://railway.app > "New Project" > "Deploy from GitHub repo" > repo'ni tanlang
2. Railway PHP loyihasini avtomatik aniqlaydi
3. **Variables** bo'limiga qo'shing:
   - `BOT_TOKEN`
   - `TELEGRAM_CHAT_ID`
4. Deploy tugagach, Railway sizga havola beradi — shu havola orqali sayt ochiladi

## Eslatma

- `index.html` ichidagi `#aloqa` bo'limi ostidagi Telegram/email/GitHub havolalarini o'zingiznikiga almashtiring.
- Forma xabarlari hech qayerda saqlanmaydi — faqat Telegramga yuboriladi va o'chib ketadi (agar Telegramda o'chirmasangiz).
- Agar spam ko'p bo'lsa, kelajakda oddiy captcha yoki rate-limit qo'shish mumkin.
