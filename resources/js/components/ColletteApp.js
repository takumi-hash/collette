import React, { Component } from 'react';
import ReactDOM from 'react-dom';

function RenderCards(props){
    return props.posts.map(post => {
        return(
            <div key={post.id} className="card my-3">
                <div className="card-body">
                    <h5 className="card-title">
                        {post.title}
                    </h5>
                    <p className="card-text">{post.user.name}</p>
                    <p className="card-text">{post.body}</p>
                    <a href="#" className="btn btn-primary">View More</a>
                    <button className="btn btn-secondary" onClick={() => props.deletePost(post)}>削除</button>
                </div>
            </div>
        );
    });
}

export default class ColletteApp extends Component {
    constructor(){
        super();
        this.state = {
            posts: [],
            title: '',
            body: ''
        };
        this.inputChange = this.inputChange.bind(this);
        this.addPost = this.addPost.bind(this);
        this.deletePost = this.deletePost.bind(this);
    }

    componentDidMount(){
        axios
            .get('/api/get')
            .then((res) => {
                this.setState({
                    posts: res.data
                });
                console.log(res.data);
            })
            .catch(error => {
                console.log(error);
            })
    }

    inputChange = (event) => {
        this.setState({[event.target.name]: event.target.value})
    }

    addPost(){
        if(this.state.title == '' || this.state.body == ''){
            console.log('either blank')
            return;
        }

        axios
            .post('/api/add', {
                    title: this.state.title,
                    body: this.state.body
            })
            .then((res) => {
                this.setState({
                    posts: res.data,
                    post: ''
                })
            })
            .catch(error => {
                console.log(error);
            });
    }

    deletePost(post){
        axios
            .post('/api/del', {
                id: post.id
            })
            .then((res) => {
                this.setState({
                    posts: res.data
                });
            })
            .catch(error => {
                console.log(error);
            })
    }

    render() {
        return (
            <React.Fragment>
                <div className="form-group mt-4">
                    <label htmlFor="title">Title</label>
                    <input type="text" className="form-control" name="title" value={this.state.title} onChange={this.inputChange}/>
                    <label htmlFor="title">Body</label>
                    <input type="text" className="form-control" name="body" value={this.state.body} onChange={this.inputChange}/>
                </div>
                <button className="btn btn-primary" onClick={this.addPost}>登録</button>
                <RenderCards posts={this.state.posts} deletePost={this.deletePost}/>
            </React.Fragment>
        );
    }
}

ReactDOM.render(<ColletteApp />, document.getElementById('colletteApp'));
