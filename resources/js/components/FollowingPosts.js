import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import FollowingPost from './FollowingPost'

export default class FollowingPosts extends Component{
    constructor(){
        super();
        this.state = {
            followingPosts: [],
        }

        this.getFollowingPosts = this.getFollowingPosts.bind(this);
    }

    componentDidMount(){
        this.getFollowingPosts();
    }

    getFollowingPosts(){
        axios
            .get('/api/post/following')
            .then((res) => {
                this.setState({
                    followingPosts: res.data
                });
            })
            .catch(error => {
                console.log(error);
            });
    }

    render() {
        return this.state.followingPosts.map(followingPost => {
            return(
                <FollowingPost key={followingPost.id} followingPost={followingPost}/>
            );
        });
    }
};
