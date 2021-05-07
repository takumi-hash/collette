import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import LatestPosts from './LatestPosts'
import FollowingUsers from './FollowingUsers'
import FollowingPosts from './FollowingPosts'

export default class ColletteApp extends Component {
    constructor(){
        super();
        this.state = {
            post: [],
            title: '',
            body: ''
        };

        this.inputChange = this.inputChange.bind(this);
        this.addPost = this.addPost.bind(this);

    }

    componentDidMount(){
    }

    inputChange = (event) => {
        this.setState({[event.target.name]: event.target.value})
    }

    addPost(){
        if(this.state.title == '' || this.state.body == ''){
            console.log('either blank')
            return;
        } else {
            axios
                .post('/api/post/add', {
                        title: this.state.title,
                        body: this.state.body
                })
                .then((res) => {
                    this.setState({
                        posts: res.data,
                        post: ''
                    });
                })
                .catch(error => {
                    console.log(error);
                });
        }
    }

    render() {
        return (
            <React.Fragment>
                <div className="row justify-content-center">
                    <div className="col-sm-4">
                        <FollowingUsers/>
                        <FollowingPosts/>
                    </div>
                    <div className="col-sm-8">
                        <div className="row">
                            <div className="col-sm-12">
                                <div className="form-group">
                                    <label htmlFor="title">Title</label>
                                    <input type="text" className="form-control" name="title" value={this.state.title} onChange={this.inputChange}/>
                                    <label htmlFor="title">Body</label>
                                    <input type="text" className="form-control" name="body" value={this.state.body} onChange={this.inputChange}/>
                                </div>
                                <button className="btn btn-primary" onClick={this.addPost}>投稿</button>
                                <LatestPosts/>
                            </div>
                        </div>
                    </div>
                </div>
            </React.Fragment>
        );
    }
};

ReactDOM.render(<ColletteApp />, document.getElementById('colletteApp'));
