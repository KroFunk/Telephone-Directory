<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()> _
Partial Class DesktopDirectory
    Inherits System.Windows.Forms.Form

    'Form overrides dispose to clean up the component list.
    <System.Diagnostics.DebuggerNonUserCode()> _
    Protected Overrides Sub Dispose(ByVal disposing As Boolean)
        Try
            If disposing AndAlso components IsNot Nothing Then
                components.Dispose()
            End If
        Finally
            MyBase.Dispose(disposing)
        End Try
    End Sub

    'Required by the Windows Form Designer
    Private components As System.ComponentModel.IContainer

    'NOTE: The following procedure is required by the Windows Form Designer
    'It can be modified using the Windows Form Designer.  
    'Do not modify it using the code editor.
    <System.Diagnostics.DebuggerStepThrough()> _
    Private Sub InitializeComponent()
        Me.components = New System.ComponentModel.Container()
        Dim resources As System.ComponentModel.ComponentResourceManager = New System.ComponentModel.ComponentResourceManager(GetType(DesktopDirectory))
        Me.NotifyIcon1 = New System.Windows.Forms.NotifyIcon(Me.components)
        Me.ContextMenuStrip1 = New System.Windows.Forms.ContextMenuStrip(Me.components)
        Me.AboutAndSettingsToolStripMenuItem = New System.Windows.Forms.ToolStripMenuItem()
        Me.QuitDesktopDirectoryToolStripMenuItem = New System.Windows.Forms.ToolStripMenuItem()
        Me.WebBrowser = New System.Windows.Forms.WebBrowser()
        Me.ContextMenuStrip1.SuspendLayout()
        Me.SuspendLayout()
        '
        'NotifyIcon1
        '
        Me.NotifyIcon1.ContextMenuStrip = Me.ContextMenuStrip1
        Me.NotifyIcon1.Icon = CType(resources.GetObject("NotifyIcon1.Icon"), System.Drawing.Icon)
        Me.NotifyIcon1.Text = "Desktop Directory"
        Me.NotifyIcon1.Visible = True
        '
        'ContextMenuStrip1
        '
        Me.ContextMenuStrip1.Items.AddRange(New System.Windows.Forms.ToolStripItem() {Me.AboutAndSettingsToolStripMenuItem, Me.QuitDesktopDirectoryToolStripMenuItem})
        Me.ContextMenuStrip1.Name = "ContextMenuStrip1"
        Me.ContextMenuStrip1.Size = New System.Drawing.Size(176, 48)
        '
        'AboutAndSettingsToolStripMenuItem
        '
        Me.AboutAndSettingsToolStripMenuItem.Name = "AboutAndSettingsToolStripMenuItem"
        Me.AboutAndSettingsToolStripMenuItem.Size = New System.Drawing.Size(175, 22)
        Me.AboutAndSettingsToolStripMenuItem.Text = "About and Settings"
        '
        'QuitDesktopDirectoryToolStripMenuItem
        '
        Me.QuitDesktopDirectoryToolStripMenuItem.Name = "QuitDesktopDirectoryToolStripMenuItem"
        Me.QuitDesktopDirectoryToolStripMenuItem.Size = New System.Drawing.Size(175, 22)
        Me.QuitDesktopDirectoryToolStripMenuItem.Text = "Quit"
        '
        'WebBrowser
        '
        Me.WebBrowser.Anchor = CType((((System.Windows.Forms.AnchorStyles.Top Or System.Windows.Forms.AnchorStyles.Bottom) _
            Or System.Windows.Forms.AnchorStyles.Left) _
            Or System.Windows.Forms.AnchorStyles.Right), System.Windows.Forms.AnchorStyles)
        Me.WebBrowser.Location = New System.Drawing.Point(1, 1)
        Me.WebBrowser.MinimumSize = New System.Drawing.Size(20, 20)
        Me.WebBrowser.Name = "WebBrowser"
        Me.WebBrowser.ScriptErrorsSuppressed = True
        Me.WebBrowser.Size = New System.Drawing.Size(1099, 499)
        Me.WebBrowser.TabIndex = 1
        '
        'DesktopDirectory
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(6.0!, 13.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.BackColor = System.Drawing.SystemColors.ControlDarkDark
        Me.ClientSize = New System.Drawing.Size(1100, 500)
        Me.Controls.Add(Me.WebBrowser)
        Me.FormBorderStyle = System.Windows.Forms.FormBorderStyle.None
        Me.Icon = CType(resources.GetObject("$this.Icon"), System.Drawing.Icon)
        Me.Name = "DesktopDirectory"
        Me.Text = "Desktop Directory"
        Me.TopMost = True
        Me.ContextMenuStrip1.ResumeLayout(False)
        Me.ResumeLayout(False)

    End Sub

    Friend WithEvents NotifyIcon1 As NotifyIcon
    Friend WithEvents ContextMenuStrip1 As ContextMenuStrip
    Friend WithEvents QuitDesktopDirectoryToolStripMenuItem As ToolStripMenuItem
    Friend WithEvents AboutAndSettingsToolStripMenuItem As ToolStripMenuItem
    Friend WithEvents WebBrowser As WebBrowser
End Class
