from telegram.ext import Updater, CommandHandler
 ▪️ 
 ▪️ def start(update, context):
 ▪️     context.bot.send_message(chat_id=update.effective_chat.id, text="Hello! I'm your bot.")
 ▪️ 
 ▪️ def main():
 ▪️     updater = Updater(token='TELEGRAM_TOKEN', use_context=True)
 ▪️     dispatcher = updater.dispatcher
 ▪️ 
 ▪️     start_handler = CommandHandler('start', start)
 ▪️     dispatcher.add_handler(start_handler)
 ▪️ 
 ▪️     updater.start_polling()
 ▪️     updater.idle()
 ▪️ 
 ▪️ if __name__ == '__main__':
 ▪️     main()
 ▪️ 
