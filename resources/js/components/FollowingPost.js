import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class FollowingPost extends Component{
    constructor(){
        super();
        this.state = {
            followingPost: [],
        };
    }

    render() {
        return (
            <div className="card my-3">
                <div className="card-body">
                    <h5 className="card-title">
                        {this.props.followingPost.title}
                    </h5>
                    <p className="card-text">{this.props.followingPost.user.name}</p>
                    <p className="card-text">{this.props.followingPost.body.length > 100 ? this.props.followingPost.body.substring(0,100) + "...": this.props.followingPost.body}</p>
                </div>
            </div>
        );
    }
};
