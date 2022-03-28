from flask import Flask, render_template, request, session
import db

app = Flask(__name__)

app.secret_key = "admin"
@app.route('/', methods=['GET', 'POST'])

def index():
    if request.method == 'POST':
        db.add_comment(request.form['comment'])
    session["user"] = "user"

    search_query = request.args.get('q')

    comments = db.get_comments(search_query)

    return render_template('index.html',
                           comments=comments,
                           search_query=search_query)
