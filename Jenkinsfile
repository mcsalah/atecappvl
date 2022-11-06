#!groovy
    
pipeline {
    agent any 
    parameters {
        string(name: 'CAUSE', defaultValue: 'anonymous', description: 'Build Cause')
    }
    stages {
        stage('Test Previous Build Status') {
            steps {
                script {
                    def lastSuccessfulBuildParams = Jenkins.instance.getItem("${env.JOB_NAME}").lastSuccessfulBuild.actions.find{ it instanceof ParametersAction }?.parameters.find{it.name == 'CAUSE'}?.value
                    echo "${lastSuccessfulBuildParams}"
                }
            }
        }
    }
}
