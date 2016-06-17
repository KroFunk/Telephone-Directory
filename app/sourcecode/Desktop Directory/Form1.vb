Public Class DesktopDirectory
    Private Sub QuitDesktopDirectoryToolStripMenuItem_Click(sender As Object, e As EventArgs) Handles QuitDesktopDirectoryToolStripMenuItem.Click
        End
    End Sub

    Private Sub AboutAndSettingsToolStripMenuItem_Click(sender As Object, e As EventArgs) Handles AboutAndSettingsToolStripMenuItem.Click
        SettingsandAbout.Show()
    End Sub

    Private Sub NotifyIcon1_MouseDoubleClick(sender As Object, e As MouseEventArgs) Handles NotifyIcon1.MouseDoubleClick
        If Me.Visible = True Then
            Me.Visible = False
            GC.Collect()
        Else

            WebBrowser.Navigate(My.Settings.URL)
            Me.Visible = True
            WebBrowser.Focus()
        End If
    End Sub

    Private Sub DesktopDirectory_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        Me.Top = (Screen.PrimaryScreen.Bounds.Height - (Me.Height + 40))
        Me.Left = (Screen.PrimaryScreen.Bounds.Width - Me.Width)
        Me.Visible = False
        WebBrowser.Navigate(My.Settings.URL)
    End Sub

    Private Sub DesktopDirectory_Deactivate(sender As Object, e As EventArgs) Handles Me.Deactivate
        Me.Visible = False
    End Sub
End Class
