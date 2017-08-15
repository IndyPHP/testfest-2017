# PHP TestFest 2017 - IndyPHP

Learn to support the PHP project by writing tests for PHP!

## Background

[PHP TestFest](https://phptestfest.org) is a woldwide event that you can
participate in through your local user group. The IndyPHP group is
participating, and this is where you can contribute.

## Getting Started

There are several ways you can setup your machine to begin testing PHP using
the [`phpqa`](https://github.com/EdgedesignCZ/phpqa) tool. The easies, by far,
is to use `docker-phpqa` which requires you to have
[Docker](https://store.docker.com/search?type=edition&offering=community)
installed on your machine.

You'll also need to configure Docker to have access to the directory where you
will be writing tests locally on your machine. Just go to Docker -> Perefernces
-> File Sharing and click the `+` button to allow access.

Once you have Docker up and running, just follow the [tutorial on the TestFest site](https://phptestfest.org/tutorials/phpqa-tutorial/)
to get `docker-phpqa` setup, and you're ready to start writing tests! The
`docker-phpqa` GitHub repo has a [handy `phpt` syntax guide](https://github.com/herdphp/docker-phpqa/wiki/How-To-PHPT)
and there are two examples of passing tests in the [tests/examples](tests/examples)
directory of this repo for your reference.

## Contributing

This repository is where we will be storing our group's submissions to
TestFest. To add your submission:

1. [Fork](https://help.github.com/articles/fork-a-repo/) and [clone](https://help.github.com/articles/cloning-a-repository/) this repository.
2. [Create a new branch](https://help.github.com/articles/creating-and-deleting-branches-within-your-repository/) for your contributions.
3. Create your own directory in `tests/`.
4. Add your tests to your directory.
5. [Submit a pull request](https://help.github.com/articles/about-pull-requests/) from your fork's branch to our `master` branch.

Alternatively, you can use the web-based interface to submit your
contributions.

## License

[CC0-1.0](https://github.com/github/gitignore/blob/master/LICENSE).

