import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class PostItem extends Component{
    constructor(){
        super();
        this.state = {
            backgroundColor: '#fff',
        }

        this.getPost = this.getPost.bind(this);
    }

    componentDidMount(){
        this.getPost();
    }

    getPost(id){
        axios
            .get('/api/post/', {params: id})
            .then((res) => {
                this.setState({
                    post: res.data
                });
            })
            .catch(error => {
                console.log(error);
            });
    }

    render() {
        return(
            // <FollowingItem key={following.id} following={following}/>
            <div className="card">
                <p>{post.title}<p>
                <p>{post.user.name}<p>
                <p>{post.body}<p>
            </div>
        );
    }
};

ReactDOM.render(<PostItem />, document.getElementById('postItem'));
